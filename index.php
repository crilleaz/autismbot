<?php
session_start();
            if (!isset($_SESSION['username'])) {
                header('Location: ./login.php');
              }

include_once("cfg.php");
 
 $input =     array(
        'Ja',
        'Nej',
		'Kanske',
		'Mm',
		'Nä',
		'Måste du alltid vara sån?',
		'Det känns inte som att jag når fram till dig.',
		'Jag vet inte riktigt hur jag ska behandla dig nu?',
		'Varför vill du påverka mitt psyke?',
		'Hur menar du?',
		'Va?',
		'Jag trodde folk skojade när dom sa att du var dum i huvudet.',
		'Ta ett djupt andetag och försök igen..',
		'Om ordet Dyslexi hade ett ansikte skulle du tjäna grova pengar.',
		'Ibland kan jag se mig själv i spegeln och vara glad att jag inte är du.',
		'Idiot.',
		'Klockan är alldeles för mycket för att jag ska sitta här och ta detta..',
		'Aja',
		'Nope',
		'Jag bryr mig?',
		'Haha',
		'xD',
		'Alla med förmåga behövs',
		'Aight',
		'Visste du att neandertalare klarade av betydligt fler dagliga rutiner än dig?',
		'Gråt ut',
		'Finns här för dig',
		'Om gudarna fick bestämma, tror du att du fått leva vidare?',
		'Bror..',
		'Lägg av',
		'Skojade bara haha',
		'Varför?'
    );




$lols = $input[array_rand($input)];

$db_uname = $_SESSION["username"];

	if(isset($_POST['sub'])){
		$text = $_POST['sub'];
		$con->query("INSERT INTO `chats` (`id`, `username`, `message`, `response`) VALUES (NULL, '{$db_uname}', '{$text}', '{$lols}');");
		
		// if(stristr($text,'hora')){
			// $con->query("INSERT INTO `chats` (`id`, `username`, `message`, `response`) VALUES (NULL, '{$db_uname}', '{$text}', 'Moget, jävla fittbarn');");
		// }if(stristr($text,'bög')){
			// $con->query("INSERT INTO `chats` (`id`, `username`, `message`, `response`) VALUES (NULL, '{$db_uname}', '{$text}', 'Sugen eller?');");
		// }if(stristr($text,'kuk')){
			// $con->query("INSERT INTO `chats` (`id`, `username`, `message`, `response`) VALUES (NULL, '{$db_uname}', '{$text}', 'Skicka en dickpic, 08 702 00 90');");
		// }if(stristr($text,'idiot')){
			// $con->query("INSERT INTO `chats` (`id`, `username`, `message`, `response`) VALUES (NULL, '{$db_uname}', '{$text}', 'Idiot? Du som sitter och skriver med en bot, jävla cpbarn');");
		// }if(stristr($text,'cp')){
			// $con->query("INSERT INTO `chats` (`id`, `username`, `message`, `response`) VALUES (NULL, '{$db_uname}', '{$text}', 'Du är cp.');");
		// }if(stristr($text,'ont')){
			// $con->query("INSERT INTO `chats` (`id`, `username`, `message`, `response`) VALUES (NULL, '{$db_uname}', '{$text}', 'Ibland gör det ont när man är liten.');");
		// }if(stristr($text,'dum')){
			// $con->query("INSERT INTO `chats` (`id`, `username`, `message`, `response`) VALUES (NULL, '{$db_uname}', '{$text}', 'Och du är förståndshandikappad, rullstols-cp');");
		// }if(stristr($text,'käften')){
			// $con->query("INSERT INTO `chats` (`id`, `username`, `message`, `response`) VALUES (NULL, '{$db_uname}', '{$text}', 'Käften själv');");
		// }if(stristr($text,'käft')){
			// $con->query("INSERT INTO `chats` (`id`, `username`, `message`, `response`) VALUES (NULL, '{$db_uname}', '{$text}', 'Knip igen du');");
		// }if(stristr($text,'autistisk')){
			// $con->query("INSERT INTO `chats` (`id`, `username`, `message`, `response`) VALUES (NULL, '{$db_uname}', '{$text}', 'Finns du också med på spektrumet?');");
		// }if(stristr($text,'hejdå')){
			// header('Location: https://www.google.se/');
		// }
		
	}
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>white chat - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<main class="content">
    <div class="container p-0">

		<h1 class="h3 mb-3"><?php echo $_SESSION['username']; ?> - Autismkliniken</h1>
		<div class="card">
			<div class="row g-0">
				<div class="col-12 col-lg-5 col-xl-3 border-right">

					<div class="px-4 d-none d-md-block">
						<div class="d-flex align-items-center">
							<div class="flex-grow-1">
								<input type="text" class="form-control my-3" placeholder="Search...">
							</div>
						</div>
					</div>

							<?php
							$logged_in_as = $_SESSION['username'];
							 $sql = "SELECT * FROM users WHERE loggedin = 1"; 
								$result = $con->query($sql);
								while($row = mysqli_fetch_array($result))
								{
									$id = $row["id"];
									$username = $row["username"];
									$message = $row["message"];
									$response = $row["response"];
									
									// svaret
									echo '<a href="#" class="list-group-item list-group-item-action border-0">';
									echo '<div class="badge bg-success float-right">5</div>';
									echo '<div class="d-flex align-items-start">';
									echo '<img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">';
									echo '<div class="flex-grow-1 ml-3">';
									echo $username;
									echo '<div class="small"><span class="fas fa-circle chat-online"></span> Online</div>';
									echo '</div>';
									echo '</div>';


									
									
									
									// echo $id . ' ' . $username . ' ' . $message . ' ' . $response;
								}
							?>

					
						
						
							
							
								
								
							
						
					</a>




					<hr class="d-block d-lg-none mt-1 mb-0">
				</div>
				<div class="col-12 col-lg-7 col-xl-9">
					<div class="py-2 px-4 border-bottom d-none d-lg-block">
						<div class="d-flex align-items-center py-1">
							<div class="position-relative">
								<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
							</div>
							<div class="flex-grow-1 pl-3">
								<strong><?php echo $_SESSION['username'] ?></strong>
								<div class="text-muted small"><em>Typing...</em></div>
							</div>
							<div>
								<button class="btn btn-primary btn-lg mr-1 px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone feather-lg"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></button>
								<button class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-lg"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></button>
								<button class="btn btn-light border btn-lg px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button>
							</div>
						</div>
					</div>

					<div class="position-relative">
						<div class="chat-messages p-4">






							<div class="chat-message-right pb-4">
								<div>
									<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
									<div class="text-muted small text-nowrap mt-2">2:33 am</div>
								</div>
								<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
									<div class="font-weight-bold mb-1">Dr Autism</div>
									Hej! Jag heter Dr, Autism. Hur mår du idag?
								</div>
							</div>			
													
							<?php
							$logged_in_as = $_SESSION['username'];
							 $sql = "SELECT * FROM chats WHERE username = '$logged_in_as'"; 
								$result = $con->query($sql);
								while($row = mysqli_fetch_array($result))
								{
									$id = $row["id"];
									$username = $row["username"];
									$message = $row["message"];
									$response = $row["response"];
									
									echo '<div class="chat-message-left pb-4">';
									echo '<div>';
									echo '<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">';
									echo '<div class="text-muted small text-nowrap mt-2">2:44 am</div>';
									echo '</div>';
									echo '<div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">';
									echo '<div class="font-weight-bold mb-1">' . $username . '</div>';
									echo $message;
									echo '</div>';
									echo '</div>';
									
									// svaret
									echo '<div class="chat-message-right pb-4">';
									echo '<div>';
									echo '<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">';
									echo '<div class="text-muted small text-nowrap mt-2">2:33 am</div>';
									echo '</div>';
									echo '<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">';
									echo '<div class="font-weight-bold mb-1">Dr Autism</div>';
									echo $response;
									echo '</div>';
									echo '</div>';
									
									
									
									// echo $id . ' ' . $username . ' ' . $message . ' ' . $response;
								}
							?>



						</div>
					</div>

					<div class="flex-grow-0 py-3 px-4 border-top">
						
						<form action="index.php" method="post">
						<div class="input-group">
							<input type="text" name="sub" class="form-control" placeholder="Skriv ditt meddelande..." autofocus>
							<button class="btn btn-primary">Skicka</button>
							</div>
						</form>
						
					</div>
				</div>
			</div>
			<a href="logout.php">Logga ut</a>
		</div>
	</div>
</main>

<style type="text/css">
body{margin-top:20px;}

.chat-online {
    color: #34ce57
}

.chat-offline {
    color: #e4606d
}

.chat-messages {
    display: flex;
    flex-direction: column;
    max-height: 800px;
    overflow-y: scroll

}

.chat-message-left,
.chat-message-right {
    display: flex;
    flex-shrink: 0
}

.chat-message-left {
    margin-right: auto
}

.chat-message-right {
    flex-direction: row-reverse;
    margin-left: auto
}
.py-3 {
    padding-top: 1rem!important;
    padding-bottom: 1rem!important;
}
.px-4 {
    padding-right: 1.5rem!important;
    padding-left: 1.5rem!important;
}
.flex-grow-0 {
    flex-grow: 0!important;
}
.border-top {
    border-top: 1px solid #dee2e6!important;
}
</style>

<script type="text/javascript">
    $('.chat-messages').scrollTop($('.chat-messages')[0].scrollHeight);
</script>
</body>
</html>