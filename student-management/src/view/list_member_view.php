<?php
include 'model/memberDAO.php';

class MemberView extends MemberDAO {
    
    public function showListMember() {
        $result = $this->getListMember();

        if ($result->num_rows > 0) {
            echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>School</th>
                </tr>";

            while($row = $result->fetch_assoc()) {
              echo 
                "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["school"]."</td>
                </tr>";
            }
            echo "</table>";
          } else {
            echo "0 results";
          }
    }

}
?>
