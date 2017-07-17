

<?php
	include("layouts/header.php")
?>

<header class="w3-container w3-theme" style="padding:21px 32px">
  <h1 class="w3-xlarge">3RP System</h1>
  
  <div class="w3-row">
    <div class="w3-col m12">
    <div class="w3-bar">
   <a href="#" class="w3-bar-item w3-button w3-round-medium">Home</a>
   <a href="#" class="w3-bar-item w3-button w3-round-medium">Link 1</a>
   <a href="#" class="w3-bar-item w3-button w3-round-medium">Link 2</a>
   <a href="#" class="w3-bar-item w3-button w3-round-medium">Link 3</a>
</div> 
</div>
    </div>
  
</header>


<div class="w3-container" style="padding:32px;">

    
    <div class="w3-row">
    <div class="w3-col m4 ">
    
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-teal w3-round-medium w3-medium" title="Add New"><i class="fa fa-plus"></i> </button>
    <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-teal w3-round-medium w3-medium" title="Print"><i class="fa fa-print"></i> </button>
    
    <div class="dropdown">
      <button class="dropbtn w3-button w3-teal w3-round-medium w3-medium"><i class="fa fa-share-square-o" style="padding:0px"></i></button>
      <div class="dropdown-content w3-animate-zoom">
        <a href="#"><i class="fa fa-file-pdf-o"></i> PDF</a>
        <a href="#"><i class="fa fa-file-excel-o"></i> Excel</a>
      </div>
    </div>
    
    
    <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center  w3-teal"><br>
      <h3>Add</h3>
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter First Name" name="usrname" required>
          <input class="w3-input w3-border" type="password" placeholder="Enter Last Name" name="psw" required>
          
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <div class="w3-row">
        <div class="w3-col m4">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-red w3-button w3-large w3-round-medium w3-block w3-section w3-padding ">Cancel <i class="fa fa-close"></i></button>
        </div>
        <div class="w3-col m1">&nbsp;</div>
        <div class="w3-col m7">
        <button class="w3-button w3-large w3-round-medium w3-block w3-teal w3-section w3-padding" type="submit">Save <i class="fa fa-floppy-o"></i></button>
        </div>
        </div>
      </div>

    </div>
  </div>
  
  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center  w3-teal"><br>
      <h3>Print</h3>
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter First Name" name="usrname" required>
          <input class="w3-input w3-border" type="password" placeholder="Enter Last Name" name="psw" required>
          
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <div class="w3-row">
        <div class="w3-col m4">
        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-red w3-button w3-large w3-round-medium w3-block w3-section w3-padding ">Cancel <i class="fa fa-close"></i></button>
        </div>
        <div class="w3-col m1">&nbsp;</div>
        <div class="w3-col m7">
        <button class="w3-button w3-large w3-round-medium w3-block w3-teal w3-section w3-padding" type="submit">Print <i class="fa fa-print"></i></button>
        </div>
        </div>
      </div>

    </div>
  </div>
  
    </div>
    <div class="w3-col m4 ">
    <div class="w3-container">
        <select class="w3-select w3-border" style="float: left; width: 80%;" name="option">
            <option value="" selected>Choose Filter</option>
            <option value="1">Filter 1</option>
            <option value="2">Filter 2</option>
            <option value="3">Filter 3</option>
            <option value="4">Others</option>
        </select>
        <a href="#" class="w3-button w3-teal w3-round-medium cx-margin-right" title="Filter Results"><i class="fa fa-filter" alt="Filter"></i></a>
    </div>
    </div>
    <div class="w3-right w3-col m4 ">
        <div class="w3-container">
            <input list="cusom-list" type="text" class="w3-input w3-border" style="float: left; width: 80%;" placeholder="Search.." title="Enter The Seach Term">
            <!-- We Will Fill This Datalist from database using PHP -->
            <datalist id="cusom-list">
                <option value="Ibrahim">
                <option value="Muhammed">
                <option value="Missi">
                <option value="Malik">
                <option value="Khalid">
                <option value="Mudather">
                <option value="Ice">
                <option value="Inesta">
                <option value="Homeless">
            </datalist>
            <a href="#" class="w3-button w3-teal w3-round-medium cx-margin-right" title="Search"><i class="fa fa-search"></i></a>
        </div>
    </div>
    </div>
<br />
    <div class="w3-row">
    <div  class="w3-col m12" style="">
        <div class="data-view" style="overflow-x:auto; ">
          <table>
            <tr class="w3-teal">
              <th>First Name</th>
              <th>Last Name</th>
              <th>Points</th>
              <th>Points</th>
              <th>Points</th>
              <th>Point</th>
              <th class="w3-center w3-right"></th>
            </tr>
            <tr>
              <td>Jill</td>
              <td>Smith</td>
              <td>50</td>
              <td>50</td>
              <td>50</td>
              <td>50</td>
              <td class="w3-center  w3-right"><a href="#" class="w3-button w3-button-small w3-teal" title="Edit"><i class="fa fa-pencil"></i></a> <a href="#" class="w3-button w3-button-small w3-red" title="Delete"><i class="fa fa-trash"></i></a> <a href="#" class="w3-button w3-button-small w3-blue" title="Print"><i class="fa fa-print"></i></a></td>
            </tr>
            <tr>
              <td>Eve</td>
              <td>Jackson</td>
              <td>94</td>
              <td>94</td>
              <td>94</td>
              <td>94</td>
              <td class="w3-center w3-right"><a href="#" class="w3-button w3-button-small w3-teal" title="Edit"><i class="fa fa-pencil"></i></a> <a href="#" class="w3-button w3-button-small w3-red" title="Delete"><i class="fa fa-trash"></i></a> <a href="#" class="w3-button w3-button-small w3-blue" title="Print"><i class="fa fa-print"></i></a></td>
            </tr>
            <tr>
              <td>Adam</td>
              <td>Johnson</td>
              <td>67</td>
              <td>67</td>
              <td>67</td>
              <td>67</td>
              <td class="w3-center w3-right"><a href="#" class="w3-button w3-button-small w3-teal" title="Edit"><i class="fa fa-pencil"></i></a> <a href="#" class="w3-button w3-button-small w3-red" title="Delete"><i class="fa fa-trash"></i></a> <a href="#" class="w3-button w3-button-small w3-blue" title="Print"><i class="fa fa-print"></i></a></td>
            </tr>
          </table>
        </div>
    </div>
    
    <div class="w3-col m12">
        <div class="w3-center" >
        <br />
        <div class="w3-bar w3-border w3-round">
          <a href="#" class="w3-bar-item w3-button">&laquo;</a>
          <a href="#" class="w3-bar-item w3-button w3-teal">1</a>
          <a href="#" class="w3-bar-item w3-button">2</a>
          <a href="#" class="w3-bar-item w3-button">3</a>
          <a href="#" class="w3-bar-item w3-button">4</a>
          <a href="#" class="w3-bar-item w3-button">&raquo;</a>
        </div>
    </div>
    </div>
    
    </div>
</div>

<?php
	include("layouts/footer.php")
?>
     
