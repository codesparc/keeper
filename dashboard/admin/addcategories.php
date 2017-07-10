<?php include_once '../includes/header.php'; ?>
<div class="main-container">
	<div class="dash-main">
	<?php require_once helperURL::includeURL().'sidebar.php'; ?>
    <section>
        <div class="dash-rightSection">
            <h2>Add Categories</h2> 
        </div>
        <div class="row">
           <div class="col-md-6">            
           	 <form method="post" id="addcatform">
              <div class="form-group">
                 <div class="alert error alert-danger">            
                  <span class="errorMsg">Some error msg</span>
                </div>
                <div class="alert success alert-success">            
                  <span class="successMsg">Some Success msg</span>
                </div>
              </div>
              <div class="form-group">
                <label for="parentcategory">Parent Category</label>
                <select class="form-control" id="parentCat">
                  <option value="0">Root</option>                  
                </select>
              </div>
        		  <div class="form-group">                
        		    <label for="category">Category Name:</label>
        		    <input type="text" class="form-control" id="category">              
        		  </div>
              <div class="form-group">
                 <div class="checkbox">
                    <label for="isactive"><input type="checkbox" id="isactive" value="1">is active</label>
                 </div>   
              </div>
        		  <button type="submit" class="btn btn-default" id="addcategory">Submit</button>
        		</form> 
           </div>
           <div class="col-md-6"></div>        	 
        </div>
    </section>
</div>
<?php include_once '../includes/footer.php'; ?>
