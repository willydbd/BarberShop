<!-- <?php
  include('lib\conn.php');
  #connect to db


function get_sales() {
  global $db;
  $r = $db->query("SELECT * FROM `sales` ");
  if (!$r || $r->num_rows == 0) return array();
  $res = array();
  while ($r1 = $r->fetch_assoc()) {
    $res[] = $r1;
  }
  return $res;
};

function get_staff(){
  global $db;

  $r = $db->query("SELECT DISTINCT `staff_name` FROM `sales` ORDER BY `id`");
  if (!$r || $r->num_rows == 0) return array();

  $res = array();
  while ($arr = $r->fetch_assoc())
    $res[] = array('name'=>$arr['staff_name']);

  return $res;
}




?> -->
