<!DOCTYPE html>
<html>
<head>

<script>
function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.textContent);
  
  // Alert the copied text
  alert("Copied the text: " + copyText.textContent);

}
</script>

    <Style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

h2 { color: #111; 
    font-family: 'Helvetica Neue', sans-serif; 
    font-size: 100px; font-weight: bold; 
    letter-spacing: -1px; 
    line-height: 1; 
    text-align: center; 
}

.button-21 {
  margin-left: 44.5%;
  margin-right: auto;
  align-items: center;
  appearance: none;
  background-color: #3EB2FD;
  background-image: linear-gradient(1deg, #4F58FD, #149BF3 99%);
  background-size: calc(100% + 20px) calc(100% + 20px);
  border-radius: 100px;
  border-width: 0;
  box-shadow: none;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-flex;
  font-family: CircularStd,sans-serif;
  font-size: 2rem;
  height: auto;
  justify-content: center;
  line-height: 1.5;
  padding: 6px 20px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transition: background-color .2s,background-position .2s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: top;
  white-space: nowrap;
}

.button-21:active,
.button-21:focus {
  outline: none;
}

.button-21:hover {
  background-position: -20px -20px;
}

.button-21:focus:not(:active) {
  box-shadow: rgba(40, 170, 255, 0.25) 0 0 0 .125em;
}

    </Style>
    <title>Georgian to English Name Converter</title>
</head>
<body>
    <div class="container">
    <h1>Georgian to English Name Converter</h1>
    <form action="index.php" method="post">
        <label for="georgianName">Enter Georgian Name:</label>
        <input type="text" name="georgianName" id="georgianName" class="input" required>
        <input type="submit" value="Convert" class="button-21" >
    </form>
    </div>
<?php
function georgianToEnglishName($georgianName) {

    $georgianToEnglish = array(
        'ა' => 'a',
        'ბ' => 'b',
        'გ' => 'g',
        'დ' => 'd',
        'ე' => 'e',
        'ვ' => 'v',
        'ზ' => 'z',
        'თ' => 't',
        'ი' => 'i',
        'კ' => 'k',
        'ლ' => 'l',
        'მ' => 'm',
        'ნ' => 'n',
        'ო' => 'o',
        'პ' => 'p',
        'ჟ' => 'zh',
        'რ' => 'r',
        'ს' => 's',
        'ტ' => 't',
        'უ' => 'u',
        'ფ' => 'f',
        'ქ' => 'q',
        'ღ' => 'gh',
        'ყ' => 'k',
        'შ' => 'sh',
        'ჩ' => 'ch',
        'ც' => 'ts',
        'ძ' => 'dz',
        'წ' => 'ts',
        'ჭ' => 'ch',
        'ხ' => 'kh',
        'ჯ' => 'j',
        'ჰ' => 'h'
    );
    
        $englishName = '';
        $georgianLetters = preg_split('//u', $georgianName, -1, PREG_SPLIT_NO_EMPTY);
    
        foreach ($georgianLetters as $georgianLetter) {
            $englishLetter = isset($georgianToEnglish[$georgianLetter]) ? $georgianToEnglish[$georgianLetter] : $georgianLetter;
            $englishName .= $englishLetter;
        }
    
        return mb_convert_case($englishName, MB_CASE_TITLE, "UTF-8");
    }
 
    //$blu = "blu";

    if (isset($_POST["georgianName"])) {
        $georgianName = georgianToEnglishName($_POST["georgianName"]);
    }


?>
<h2 id="myInput" ><?php echo $georgianName; ?></h2>
<button onclick="myFunction()" class="button-21" role="button">Copy text</button>
</body>
</html>






