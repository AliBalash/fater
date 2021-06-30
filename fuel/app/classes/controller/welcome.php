<?php


class Controller_Welcome extends Controller
{

	public function action_index()
	{
		// $db = new mysqli('localhost', 'root', '', 'emoji');
		// $res = $db->query("select * from message")->fetch_all();

		// $today = date("Y-m-d H:i:s");
		// $statement = $db->prepare("INSERT INTO `message` (`date`) VALUES ('$today')");
		// // $statement->bind_param('s', $today);
		// // $statement->execute();
		// echo date("Y-m-d H:i:s");
		// var_dump($statement);
		date_default_timezone_set('Asia/Tehran');
		echo date("h:m:s");
		// var_dump(date("h:m:s"));
		return \View::forge('template');
	}

	public function action_login()
	{
		if (isset($_POST['query'])) {
			$query = "SELECT * FROM Songs WHERE song_name LIKE '{$_POST['query']}%' LIMIT 100";

			$result = DB::query("SELECT * FROM message WHERE comment LIKE '{$_POST['query']}%' LIMIT 100")->execute();


			foreach ($result as $res) {
				echo $res["fullname"] . " :";
				echo $res['comment'] . "<hr/>";
			}
		}
		$name = $_POST["name"];
		try {
			$result = DB::select()->from('users')->where('fullname', '=', $name)->execute();
			$result = $result[0];
			if ($result["fullname"] == $name) {

				$query =  DB::select()->from('message')->execute();
				$max = DB::query('select * from message where date >= date_sub(now(),interval 2 minute)')->execute();

				return \View::forge('login', compact("name", "query", "max"));
			} else {
				die("name is not valid");
			}
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}


	public function action_storChat()
	{
		$name = $_POST["name"];
		$message = $_POST["message"];
		$find = DB::select()->from('users')->where('FullName', '=', $name)->execute();
		$data = $find[0];
		$id = $data["id"];
		$time = $_POST["time"];
		// $today = date("Y-m-d H:i:s");
		var_dump($_POST);


		if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
			$targetDir = "uploads/";
			$fileName = time() . basename($_FILES["file"]["name"]);
			$targetFilePath = $targetDir . $fileName;
			$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
			// Allow certain file formats
			$allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
			if (in_array($fileType, $allowTypes)) {
				move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath);
				// $insert = DB::query("INSERT INTO `message` (`id`, `fullname`, `comment`,`image`,`userID`) VALUES (NULL, '$name', '$message', '$id')");
				$db = new mysqli('localhost', 'root', '', 'myDB');
				$statement = $db->prepare("INSERT INTO `message` (`fullname`,`image`,`userID`,`date`) VALUES ('$name',?,'$id','$time')");
				$statement->bind_param('s', $fileName);
				$statement->execute();
			}
		} else {
			$db = new mysqli('localhost', 'root', '', 'myDB');
			$statement = $db->prepare("INSERT INTO `message` (`fullname`,`comment`,`userID`,`date`) VALUES ('$name',?,'$id','$time')");
			$statement->bind_param('s', $message);
			$statement->execute();
		}



		Response::redirect('welcome/show/' . $name);
		// var_dump($insert);
	}

	public function action_show($name)
	{
		$message =  DB::select()->from('message')->execute();
		$max = DB::query('select * from message where date >= date_sub(now(),interval 2 minute)')->execute();
		return \View::forge('show', compact("name", "message", "max"));
		// var_dump($name);
	}

	public function action_retrnViweSearch()
	{
		return \View::forge('search');
		// var_dump($name);
	}

	public function action_search()
	{
		if (isset($_POST['query'])) {
			$query = "SELECT * FROM Songs WHERE song_name LIKE '{$_POST['query']}%' LIMIT 100";

			$result = DB::query("SELECT * FROM message WHERE comment LIKE '{$_POST['query']}%' LIMIT 100")->execute();


			foreach ($result as $res) {
				echo $res["fullname"] . " :";
				echo $res['comment'] . "<hr/>";
			}
		}
	}
	public function action_emoji()
	{
		$db = new mysqli('localhost', 'root', '', 'mydb');
		var_dump($db);
	}
}
