<?php namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		return view('login');
	}

	public function authenticate()
	{
		$session = session();
		$data=['error'=>'Login failed!'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$db = db_connect();
		$builder = $db->table('login');
		$query=$builder->get();
		$builder->where(['email'=> $email ,'password'=> md5($password)]);
		
		if($builder->countAllResults() > 0)
		{	
			foreach ($query->getResult() as $row)
			{
				$_SESSION['name']=$row->name;
				$_SESSION['email']=$row->email;
				$_SESSION['auth_token']=$row->auth_token;
			}
			
			
		}
		else
		{
			return view('login',$datad);
		}
		
	}

	//--------------------------------------------------------------------

}
