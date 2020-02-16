<?PHP
$username = "";
$password = "";
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	require '../functions.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$fulname  = $_POST['fulname'];

	$database = "maymay";

	$db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );

	if ($db_found) {		
		$SQL = $db_found->prepare('SELECT * FROM login WHERE L1 = ?');
		$SQL->bind_param('s', $username);
		$SQL->execute();
		$result = $SQL->get_result();

		if ($result->num_rows > 0) {
			$errorMessage = "Username already taken";
		}
		else {
			$phash = password_hash($password, PASSWORD_DEFAULT);
			$SQL = $db_found->prepare("INSERT INTO users (L1, L2, L3) VALUES (?, ?, ?)");
			$SQL->bind_param('sss', $username, $phash, $fulname);
			$SQL->execute();

			header ("Location: staff.php");
		}
	}
	else {
		$errorMessage = "Database Not Found";
	}
}
?>