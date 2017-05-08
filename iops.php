        
                <div class="container">
          
          <form class="form-horizontal" action="calculation.php" method="GET">
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Select Disk Type:</label>
              <div class="col-sm-8">
                    <select name="disktype" id="disktype">
                    <option value="nlsas4">NLSAS- 4 TB</option>
                        <option value="nlsas6">NLSAS- 6 TB</option>
                        <option value="nlsa8">NLSAS- 8 TB</option>
                    <option value="sas10kt">SAS 10K- 1.8 TB</option>
                        <option value="sas10K1200GB">SAS 10K- 1.2 TB</option>
                        <option value="sas10K900GB">SAS 10K- 900 GB</option>
                    <option value="sas15K600GB">SAS 15K-600GB</option>
                    <option value="ssd2">SSD-2TB</option>
                        <option value="ssd4">SSD-4TB</option>
                        <option value="ssd800GB">SSD-800 GB</option>
                    <option value="ssdif100">SSD-IF-100</option>
                    <option value="zil">ZIL</option>
                    <option value="l2arc">L2ARC</option>
                    <option value="MetaDev">MetaDev</option>
                  </select>
                  <br><br>
              
                
                
              
              
              <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Click here to view the features of each disk type</button>
                  
                  <div id="demo" class="collapse">
                    
                      
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Type</th>
                                <th>Capacity</th>
                                <th>IOPS/ per disk</th>
                                <th>IOPS/ per TB</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>NLSAS</td>
                                <td>2</td>
                                <td>100</td>
                                <td>50</td>
                              </tr>
                             <tr>
                                <td>SAS 10K</td>
                                <td>0.9</td>
                                <td>135</td>
                                <td>150</td>
                              </tr>
                              <tr>
                                <td>SAS 15K</td>
                                <td>0.6</td>
                                <td>180</td>
                                <td>300</td>
                              </tr>
                                <tr>
                                <td>SSD</td>
                                <td>0.8</td>
                                <td>8000</td>
                                <td>10000</td>
                              </tr>
                                 <tr>
                                <td>SSD</td>
                                <td>2</td>
                                <td>8000</td>
                                <td>4000</td>
                              </tr>
                                
                                <tr>
                                <td>ZIL</td>
                                <td></td>
                                <td></td>
                                <td>2000</td>
                              </tr>
                                
                                <tr>
                                <td>L2ARC</td>
                                <td></td>
                                <td></td>
                                <td>2000</td>
                              </tr>
                                <tr>
                                <td>MetaDev</td>
                                <td></td>
                                <td></td>
                                <td>15000</td>
                              </tr>
                            </tbody>
                          </table>
                  </div>




                  



           

            </div>    
                
                
                
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Select RAID Type:</label>
              <div class="col-sm-8">          
                    <select name="raidtype" id=""raidtype>
                    <option value="Mirror">Mirror</option>
                    <option value="Raidz121">RAIDz1-Single Parity(2+1)</option>
                    <option value="Raidz141">RAIDz1-Single Parity(4+1) Typical SAS</option>
                    <option value="Raidz181">RAIDz1-Single Parity(8+1) Typical SSD</option>
                    <option value="Raidz242">RAIDz2-Double Parity(4+2)</option>
                    <option value="Raidz282">RAIDz1-Single Parity(8+2) Typical NLSAS</option>
                    <option value="Raidz383">RAIDz3-Triple Parity(8+3)</option>
                    
                  </select>
                  <br><br>
                  
                  
                      
              <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo2">Click here to view the features of each RAID type</button>
                  
                  <div id="demo2" class="collapse">
                    
                      
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>RAID Type</th>
                                <th>#Data disks</th>
                                <th>#Parity Disks</th>
                                <th>#Total</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Mirror</td>
                                <td>1</td>
                                <td>1</td>
                                <td>2</td>
                              </tr>
                             <tr>
                                <td>RAIDz1-Single Parity(2+1)</td>
                                <td>2</td>
                                <td>1</td>
                                <td>3</td>
                              </tr>
                              <tr>
                                <td>RAIDz1-Single Parity(4+1) Typical SAS</td>
                                <td>4</td>
                                <td>1</td>
                                <td>5</td>
                              </tr>
                                <tr>
                                <td>RAIDz1-Single Parity(8+1) Typical SSD</td>
                                <td>8</td>
                                <td>1</td>
                                <td>9</td>
                              </tr>
                                 <tr>
                                <td>RAIDz2-Double Parity(4+2)</td>
                                <td>4</td>
                                <td>2</td>
                                <td>6</td>
                              </tr>
                                
                                <tr>
                                <td>RAIDz2-Double Parity(8+2) Typical NLSAS</td>
                                <td>8</td>
                                <td>2</td>
                                <td>10</td>
                              </tr>
                                
                                <tr>
                                <td>RAIDz2-triple Parity(8+3)</td>
                                <td>8</td>
                                <td>3</td>
                                <td>11</td>
                              </tr>
                            </tbody>
                          </table>
                  </div>
           
                  
                  
                  
              </div>
            </div>
            
              
               <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Enter Usable Capacity:</label>
              <div class="col-sm-8">          
                   <input type="number" name="usablecapacity" id="usablecapacity" min="1" max="1000">
                  <br><br>
              </div>
            </div>
            
              <br>

              <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#standardsettings">Standard Settings</button>
                  
                  <div id="standardsettings" class="collapse">
                    
                      
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Feature</th>
                                <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Number of ZIL(Groups)</td>
                                <td>2</td>
                               
                              </tr>
                             <tr>
                                <td>Number of Cache</td>
                                <td>0</td>
                                
                              </tr>
                              <tr>
                                <td>Number of Meta(Groups)</td>
                                <td>1</td>
                                
                              </tr>
                                <tr>
                                <td>Write Percentage</td>
                                <td>20</td>
                                
                              </tr>
                                 <tr>
                                <td>Cache hit Percent</td>
                                <td>50</td>
                                
                              </tr>
                                
                                <tr>
                                <td>Avg Block Size in KB</td>
                                <td>4</td>
                                
                              </tr>
                                
                                
                            </tbody>
                          </table>
                  </div>


              
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
        </div>

