<html>
 <head>
  <script type="text/javascript">

   function changeFunc() {
    var selectBox = document.getElementById("selectBox");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    alert(selectedValue);
   }

  </script>
 </head>
 <body>
  <select id="selectBox" onchange="changeFunc();">
   <option value="1">Option #1</option>
   <option value="2">Option #2</option>
  </select>
 </body>
</html>