            <nav id="inf-one">
              <h1><span class="fa-fw select-all fas"></span> Dashboard </h1>
            </nav>
            <nav id="inf-two">
              <H1>Categories List</H1>  
            </nav>
            <nav id="inf-tree" class="bea">
              <H1>New Categories</H1>                
            </nav>
</header>
   <div class="add-wrap">
              <h1 id="pag-tit">Add New Category</h1>
              <div id="diserr-wrap">
                <div id="diserr"></div>
                </div>
                  <ul>
                    <li id="numli"><span id="num-add">1. </span></li>
                    <li>Name  </li>
                    <li id="fieldli"><input type="text" placeholder="Name" id="catname" name="catname"></li>
                  </ul>
                  <ul>
                    <li id="numli"><span id="num-add">2. </span></li>
                    <li>Parent  </li>
                    <li id="fieldli"><input type="text" placeholder="Parent" id="parent" name="parent"></li>
                  </ul>
                  <ul>    
                    <li id="numli"><span id="num-add">4. </span></li>
                    <li>Description  </li>
                    <li id="fieldli"><textarea name="" id="" maxlength="200" placeholder="max 10 characters"></textarea></li>
                  </ul>
                  <ul>
                    <li id="numli"><span id="num-add">3. </span></li>
                    <li>Meta Tag Name  </li>
                    <li id="fieldli"><input type="text" placeholder="Meta Tag Name" id="metacatname" name="metacatname"></li>
                  </ul>
                  <ul>    
                    <li id="numli"><span id="num-add">4. </span></li>
                    <li>Meta Description  </li>
                    <li id="fieldli"><textarea name="" id="" maxlength="200" placeholder="max 10 characters"></textarea></li>
                  </ul>
                  <ul>    
                    <li id="numli"><span id="num-add">5. </span></li>
                    <li>Meta Keyword  </li>
                    <li id="fieldli"><textarea name="" id="" maxlength="200" placeholder="max 10 characters"></textarea></li>
                  </ul>
                  <ul>    
                    <li id="numli"><span id="num-add">6. </span></li>
                    <li>Mode </li>
                    <li id="fieldli">
                      <select name="catmode" id="catmode">
                        <option value="" selected>--- Mode ---</option>
                        <option value="active">Active</option>
                        <option value="unactive">UnActive</option>
                      </select>
                    </li>
                  </ul>
                <footer>
                  <nav id="opti">
                    <button id="add" class="add"><span class="fa-fw select-all fas"></span></button>
                    <a href="<?= BASEURL;?>/categories"><button id="abort"><span class="fa-fw select-all fas"></span></button></a>
                  </nav>
                </footer>
</div>































