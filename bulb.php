<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
                      $name=$pmode="";  
                        $name=$_POST["Name"];
                         
                           
                              $bulbs=$_POST["bulb"];
                              $pmode=$_POST["paymode"];
                            
                        print "Your name is : $name <br>";
                        $total=0;
                        foreach( $bulbs as $bulb)
                        {
                                        $total += $bulb;
                                        $totaltax=(6.2/100)*$total;
                                        $totalcost=$total+$totaltax; 
                        }
  //displaying the ordered item

                        echo " You have ordered : ";
                        echo "<table border=1><tr><th>Item</th><th>Qty</th><th>Rate</th></tr>";
                        foreach( $bulbs as $bulb)
                            {
                              if(!empty($bulb))
                                  { 
                                    if($bulb==2.39)
                                    {
                                      echo "<tr><td>100-watt light bulbs</td><td>4</td><td>2.39</td></tr>";
                                    }
                                    else if($bulb==4.29)
                                    {
                                      echo "<tr><td>100-watt light bulbs</td><td>8</td><td>4.29</td></tr>";
                                    }
                                    else if($bulb==3.95){
                                      echo "<tr><td>100-watt long life light bulbs</td><td>4</td><td>3.95</td></tr>";
                                    }
                                    else {
                                      echo "<tr><td>100-watt long life light bulbs</td><td>8</td><td>7.49</td></tr>"; 
                                    }
                                  }
                            }
                          echo "</table>";
                        print "The total cost for you order including tax : $totalcost<br>";
                        print "Your payment mode is by $pmode";
                      }

?>

<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html>
            <head>
                        <title> Online Bulb ordering form</title>
                              <h2>LightUpYourLife.com</h2>
            </head>
            <body>
                        <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        Customer Name<input type="text" name="Name" size="30" required="yes"/><br>
                        Select your order :<br>
                          <input type="checkbox" name="bulb[]" value="2.39" checked="checked"/>
                                    Four 100-watt light bulbs for $2.39 </br>
                          <input type="checkbox" name="bulb[]" value="4.29">
                                    Eight 100-watt light bulbs for $4.29 </br>
                         <input type="checkbox" name="bulb[]" value="3.95">
                                    Four 100-watt  long life light bulbs for $3.95</br>
                         <input type="checkbox" name="bulb[]" value="7.49">
                                    Eight 100-watt long life light bulbs for $7.49</br>
Select the mode of your payment:</br>
                        <input type ="radio" name="paymode" value="visa" checked="checked"/>Visa<br>
                        <input type ="radio" name="paymode" value="Master card"/>Master card<br>
                        <input type ="radio" name="paymode" value="Discover"/>Discover<br>
          <input type="submit" value="Submit Order"/>
                        <input type="reset" value="Clear Order form"/>                      
              </body>
</html>
