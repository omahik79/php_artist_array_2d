<?php
	
	
?>
<html>
 <head>
  <title>Random Images</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
 </head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <body>
  <ul>
      
	<?php
      
      
	   
      $artists = array
(
 array("First name ","Last name", "Date of birth","Country of origin",'Picture'),         
array("Michael ","Jackson", "August 29, 1958","Gary, Indiana",'<img src="1.jpg" border="0">'),
array("Johnny"," Cash","February 26, 1932","Kingsland, Arkansas",'<img src="2.jpg" border="0">'),
array("Lady"," Gaga","March 28, 1986","Yonkers, New York",'<img src="3.jpg" border="0">'),
array("Elvis"," Presley"," January 8, 1935","Tupelo, Mississippi",'<img src="4.jpg" border="0">'),
 array("Kadim ","Al Sahir"," September 12, 1957"," Mosul, Iraq",'<img src="5.jpg" border="0">')
);

 
    if (count($artists) > 0): ?>
<table class="table table-bordered  table-striped" >
  <thead >
    <tr>
    
    </tr>
  </thead>
  <tbody>
<?php foreach ($artists as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>
      
  
	
      
      
 </ul>
 
  

 </body>
</html>