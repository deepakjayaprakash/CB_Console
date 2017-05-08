

      <h4>Enter the details to generate a quotation</h4>
      
        <div class="col-md-3"></div>
        
        <div class="col-md-6">



                    <form action="pricing.php" method="GET">
               <fieldset style="border:1px solid; padding:30px;">
                   <legend>Customer Info:</legend>
              <div class="form-group">
                <label>Customer/ Company</label>
                <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Enter customer name">
              </div>
                        
                        <div class="form-group">
                <label>Customer Contact</label>
                <input type="text" class="form-control" id="customerName" name="customerName" placeholder="Enter name of contact person">
              </div>
                        
                        <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email for contact">
                
              </div>
                        
                        <div class="form-group">
                <label>Delivery Address</label>
                <input type="text" class="form-control" id="adress" name="address" placeholder="Enter delivery address">
              </div>
                      
                        <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter description of the order">
              </div>
                        </fieldset>   
                        
                        
              <br><br>         
                   <fieldset style="border:1px solid; padding:30px;">
                 <legend> Order Specifications:</legend>      
                    <div class="form-group">
              <label class="control-label ">Enter Usable Capacity:</label>
                 
                   <input type="number" name="usablecapacity" id="usablecapacity" min="1" max="1000">
                  <br><br>
             
            </div>
                        
                        
                        
                        
              <div class="form-group">
                <label for="exampleSelect1">Select Tier</label>
                <select class="form-control" id="tier" name="tier">
                  <option value="NLSAS">NLSAS</option>
                  <option value="SAS10K">SAS10K</option>
                  <option value="SAS15K">SAS15K</option>
                  <option value="SSDHighCapacity">SSDHighCapacity</option>
                  <option value="SSDHighPerformance">SSDHighPerformance</option>
                </select>
              </div>
              
              
              
                       
                       <div class="form-group">
              <label class="control-label ">Number of controllers required:</label>
                 
                   <input type="number" name="controllers" id="controllers" min="1" max="1000">
                  <br><br>
             
            </div>
                       
              <div class="form-group">
              <label class="control-label ">Number of JBODS required:</label>
                 
                   <input type="number" name="jbods" id="jbods" min="1" max="1000">
                  <br><br>
             
            </div>
                       <div class="form-group">
              <label class="control-label ">Number of Data Disks required:</label>
                 
                   <input type="number" name="datadisks" id="datadisks" min="1" max="1000">
                  <br><br>
             
            </div>
                       
            <div class="form-group">
              <label class="control-label ">Number of SAS Cables required:</label>
                 
                   <input type="number" name="sascables" id="sascables" min="0" max="1000">
                  <br><br>
             
            </div>
                       
                       
              Zil Required? : 
                <input type="radio" name="zil" value="1" checked> Yes
                <input type="radio" name="zil" value="0"> No<br><br>
                       
             Read Cache Required? : 
                <input type="radio" name="readcache" value="1" checked> Yes
                <input type="radio" name="readcache" value="0"> No<br><br> 
                       
             Meta Cache Required? : 
                <input type="radio" name="metacache" value="1" checked> Yes
                <input type="radio" name="metacache" value="0"> No<br><br>  
                       
                       </fieldset>
                        <center>
              <button type="submit" class="btn btn-primary">Submit</button>
                            
                            </center>
            </form>

</div>

        