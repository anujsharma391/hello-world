<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>find demo</title>
  <script src="https://code.jquery.com/jquery-1.10.2.js" type="text/javascript"></script>
</head>

<body>
  

<ul class="dropdown-menu">
    <li><a href="http://mobi.apparelinindia.com/grs/sites/default/files/karriere/grs_wissenschaftlicher_mitarbeiter_1800.pdf" id="listJob">listJobs</a></li>
    <li><a href="http://mobi.apparelinindia.com/grs/sites/default/files/karriere/grs_wissenschaftlicher_mitarbeiter_1800.pdf" id="newJOB">Add new Job</a></li>
    <li><a href="http://mobi.apparelinindia.com/grs/sites/default/files/karriere/grs_wissenschaftlicher_mitarbeiter_1800.pdf" id="editJOB">Edit Job</a></li>
    <li><a href="http://mobi.apparelinindia.com/grs/sites/default/files/karriere/grs_wissenschaftlicher_mitarbeiter_1800.pdf">Delete Job</a></li>
</ul>


  
  <script>
         $(document).ready(function() {
           
            $('body a').each(function (index) {
              var get_href_anchor = $(this).attr('href');
              var replace_href = get_href_anchor.replace('/grs/','/');
              $(this).attr('href', replace_href);
              
            });
        });
</script>
</body>
</html>
