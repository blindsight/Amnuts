<?php
echo "hello my name is $name";

try 
{
echo "before";
echo hello_print();
echo "after";
}  catch(Exception $e) {
	echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>