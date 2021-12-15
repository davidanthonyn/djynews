<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    /*
	 public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function lihat_data()
	{
		$this->load->view('v_lihat_dosen');
	}
	*/

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Account'));
    }

    function index()
    {
        //$data['user'] = $this->M_Account->tampilkan_record()->result();
        //$this->load->view('v_login.php', $data);
        $this->load->view('v_login.php');
    }



    function proses_session_login()
    {
        if (!empty($_SESSION['account_username'])) {
?>
            <script>
                alert('Anda sudah login');
                window.location.href = '../home.php';
            </script>

        <?php
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "djynews";
        $errors = array();

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        if ($this->input->post('login') == true) {
            $tangkapNamaUserdavid = $this->input->post('nama_user_david');
            $tangkapPassworddavid = $this->input->post('password_david');

            //$query = "SELECT * FROM user WHERE user_name='$tangkapNamaUserdavid' AND password='$tangkapPassworddavid'";
            //$sql = mysqli_query($con, "SELECT AdminUserName,AdminEmailId,AdminPassword FROM tbladmin WHERE (AdminUserName='$uname' || AdminEmailId='$uname')");
            $query = "SELECT user_name, password, email_user FROM user WHERE (user_name='$tangkapNamaUserdavid' || email_user='$tangkapNamaUserdavid')";
            $result = mysqli_query($conn, $query);
            $num = mysqli_fetch_array($result);

            if ($num > 0) {
                $hashpassword = $num['password']; // Hashed password fething from database
                //verifying Password
                if (password_verify($password, $hashpassword)) {
                    $_SESSION['login'] = $_POST['id_user'];


                    redirect('Home');
                } else {
                    echo "<script>alert('Wrong Password');</script>";
                }
            }
            //if username or email not found in database
            else {
                echo "<script>alert('User not registered with us');</script>";
                redirect('Account');
            }
        }
    }

    function session_register()
    {
        $this->load->view('v_register.php');
    }

    function proses_session_register()
    {
        if (!empty($_SESSION['account_username'])) {
        ?>
            <script>
                alert('Anda sudah login');
                window.location.href = '../home.php';
            </script>

            <?php
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "djynews";
        $errors = array();

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        if ($this->input->post('register') == true) {
            //$tangkapNamaUserdavid = $this->input->post("nama_user_david");
            //$tangkapPassworddavid = $this->input->post("password_david");
            $tangkapNamaDepan = $this->input->post("nama_depan");
            $tangkapNamaBelakang = $this->input->post("nama_belakang");
            $tangkapEmail = $this->input->post("email_user");
            $tangkapJenisKelamin = $this->input->post("jenis_kelamin");


            $tangkapNamaUserdavid = mysqli_real_escape_string($conn, $_POST['nama_user_david']);
            $tangkapPassworddavid =  mysqli_real_escape_string($conn, $_POST['password_david']);

            $query = "SELECT user_name FROM user WHERE username='$tangkapNamaUserdavid'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) == 1) {
            ?>
                <script>
                    alert('Username already exists!');
                    window.location.href = '"<?php echo base_url() . 'Account' ?>';
                </script>
                <?php
            } else {
                $passhash = password_hash($tangkapPassworddavid, PASSWORD_DEFAULT);
                $insert = mysqli_query($conn, "INSERT INTO `user`(`id_user`, `user_name`, `password`, `userlevel`, `nama_depan`, `nama_belakang`, `email_user`, `jenis_kelamin`, `id_subscription`, 
					`Created_at`, `Updated_at`) 
					VALUES ('NULL',$tangkapNamaUserdavid','$passhash','reader','$tangkapNamaDepan','$tangkapNamaBelakang','$tangkapEmail',' $tangkapJenisKelamin',null,now(),now())");


                if ($insert) {
                ?>
                    <script>
                        alert('Registration successful, now return to login to input your username and password');
                        window.location.href = '"<?php echo base_url() . 'Account' ?>';
                    </script>

            <?php

                } else {
                    echo mysqli_error();
                }

                $conn->close();
            }
        } else {
            ?>
            <script>
                alert('Form tidak boleh kosong');
                window.location.href = '"<?php echo base_url() . 'Account/session_register' ?>';
            </script>

<?php
        }
    }
}
