<nav id="inf-one">
    <h1><span class="fa-fw select-all fas"></span> Dashboard </h1>
</nav>
<nav id="inf-two">
    <H1>Categories List</H1>
</nav>
<div class="page-wrap">
	<nav id="opti">
       <a href="<?php echo BASEURL;?>/categories/create/"><button id="plus"><span class="fa-fw select-all fas"></span></button></a> 
	    <button id="edit" disabled ><span class="fa-fw select-all fas"></span></button>
	    <button id="delete" disabled><span class="fa-fw select-all fas"></span></button>
	</nav>
	<div id="dat-wrap">
    <table>
        <thead id="tab-he">
          <td><input type="checkbox" id="checkall" name="" autocomplete="off"></td>
          <td>Name</td>
          <td>Mode</td>
        </thead> 

      <tbody>
        <?php  foreach ($data['cat'] as $cat) : ?>
        <tr>
          <td>
            <input type="checkbox" class="checkcat" name="<?= $cat["cat_id"]?>"" autocomplete="off">
          </td>
          <!-- <td><?=$cat["cat_id"]?></td>  -->
          <td>
                <?= $cat["name"]?>
          </td>
          <td>
              <?php
                if($cat["mode"] = 1){
                  echo "Active";
                }else{
                  echo "Unactive";
                }
              ?>
          </td>
        </tr>
        <?php endforeach ?>
    </tbody>
    </table>
   </div>
   <p /><br />
   <footer>
	*NOTE : <i>if you disable the category status, all of the items with same<br/>
    cat will automatically disabled from your site</i> 
   </footer>
</div> 
































