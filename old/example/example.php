<select id="edition" onchange="func()">
      <option value="none" selected >----Select ----</option>
      <option id="1">A</option>
      <option id="2">B</option>
     </select>
<tr id ="trhide">
    <td><span>Number of Licenses</span></td>
    <td><input type="text" id="licenseNo" size="5" value="30" /></td>
  </tr>
</table>

<script type="text/javascript">
 function func() {
   var elem = document.getElementById("edition");

   if(elem.value == "B") {
      document.getElementById("trhide").style.visibility = "visible"; 
   } else {
     document.getElementById("trhide").style.visibility = "hidden"; 
   }
 }
</script>