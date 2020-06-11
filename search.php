<?php
                        if(isset($GET['sub'])){
                            $search = $GET['search'];
                            $search_q = "select * from post where address= '$search'";
                            $run_q = mysqli_query($con, $search_q);

                            while($rows = mysqli_fetch_array($run_q))
                            {
                                $type = $rows['type'];
                               $address = $rows['address'];
                               $description = $rows['description'];
                               $phonenumber = $rows['phonenumber'];
                    ?>
                            <table>
                                <tr>
                                    <td><?php echo $type ?></td>
                                    <td><?php echo $address ?></td>
                                    <td><?php echo $description ?></td>
                                    <td><?php echo $phonenumber ?></td>
                                </tr>
                            </table>
                            <?php
                            }
                        }
                        ?>
