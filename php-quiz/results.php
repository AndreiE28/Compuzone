<!DOCTYPE html>
<!--code by webdevtrick (webdevtrick.com) -->
<html>
 
<head>
	<meta charset=UTF-8" />
	
	<title>Test</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
	<div id="page-wrap">
 
		<h1>Resultate</h1>
		
        <?php
			
			$answer1 = isset($_POST['question-1-answers']) ? $_POST['question-1-answers'] : null;
			$answer2 = isset($_POST['question-2-answers']) ? $_POST['question-2-answers'] : null;
			$answer3 = isset($_POST['question-3-answers']) ? $_POST['question-3-answers'] : null;
			$answer4 = isset($_POST['question-4-answers']) ? $_POST['question-4-answers'] : null;
			$answer5 = isset($_POST['question-5-answers']) ? $_POST['question-5-answers'] : null;
			$answer6 = isset($_POST['question-6-answers']) ? $_POST['question-6-answers'] : null;
			$answer7 = isset($_POST['question-7-answers']) ? $_POST['question-7-answers'] : null;
			$answer8 = isset($_POST['question-8-answers']) ? $_POST['question-8-answers'] : null;
            
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            if ($answer6 == "A") { $totalCorrect++; }
            if ($answer7 == "A") { $totalCorrect++; }
            if ($answer8 == "C") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 8 corecte</div>";
            
        ?>
	
	</div>
 
</body>
 
</html>