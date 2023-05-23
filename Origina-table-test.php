<?php
                $query = "SELECT * FROM student_data";
                $result = mysqli_query($db, $query);
                
                if(mysqli_num_rows($result) > 0)
                {
                    foreach($result as $student)
                    {
                        // echo $student['course'];
                        ?>
                        <tr>
                            <td><?= $student['id'];?></td>
                            <td><?= $student['firstname'];?></td>
                            <td><?= $student['program'];?></td>
                            <td><?= $student['course'];?></td>
                            <td><?= $student['state'];?></td>
                        </tr>
                        <?php
                    }
                }
                else
                {
                    echo "<h5> No record found </h5>";
                }