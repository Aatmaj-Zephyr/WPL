```php
<?php

echo 'Hello';
$filename = $_FILES['uploadedFile']['name'];
echo "\n The file you uploaded is named ".$filename;
$filetype = $_FILES['uploadedFile']['type'];
echo "\n The file you uploaded is of the type ".$filetype;
?>

```
![image](https://user-images.githubusercontent.com/83284294/231135649-21cf2f0d-da86-42b6-ac61-73ad3326f41d.png)
![image](https://user-images.githubusercontent.com/83284294/231135695-699b9963-1b12-4a20-8faa-6e9dc759eb76.png)
