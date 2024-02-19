<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task_3_PHP_Function</title>
</head>

<body>

  <?php

  $test_file = 'test.xml';

  $xml = simplexml_load_file($test_file) or die("Error: Cannot create object");

  //Questions
  foreach ($xml->question as $question) {
    echo "<dl>";

    // question number 
    $questionNum = strip_tags((string)$question['id']) . '.';

    // Question. 
    // Make the first character capitalized and remove spaces at the beginning and end of the string
    $questionName = mb_ucfirst(trim((string)$question->name));

    // Remove Xml tags, repeating spaces and convert special characters to html codes.
    $questionName = htmlspecialchars(strip_tags(preg_replace('/\s+/', ' ', $questionName)));
    echo "<dt><b>" . $questionNum . " " . $questionName . "</b></dt>";


    // Answers
    foreach ($question->answer as $answer) {

      // answer number
      $answerNum = strip_tags((string)$answer["id"]) . ". ";

      // Answer.
      // Capitalize the first character and remove spaces at the beginning and end of the string
      $answerName = mb_ucfirst(trim((string)$answer));

      // Remove XML tags and convert special characters to html codes
      $answerName = htmlspecialchars(strip_tags(preg_replace('/\s+/', ' ', $answerName)));

      // Removing repeated spaces
      // $answerName = preg_replace('/\s+/', ' ', $answer);

      echo "<dd>" . $questionNum . $answerNum . $answerName . "</dd>";
    }

    echo "</dl>";
  }

  // function that capitalizes the first character 
  function mb_ucfirst($text)
  {
    return mb_strtoupper(mb_substr($text, 0, 1)) . mb_strtolower(mb_substr($text, 1));
  }
  ?>

</body>

</html>