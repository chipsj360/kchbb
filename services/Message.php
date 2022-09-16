<?php

include_once './vendor/autoload.php';
include_once '../repository/Donor_repository.php';
class Message{
   private $status;
   private $table='sms_status';
   private $db_conn;

   public function __construct($db){
    $this-> db_conn = $db;
}

public function send($blood_group){

$sid = 'ACe6edc25556d8dfa41c719bf62c86fdaf';
$token = '553fed9afc7b943e4b8ad30b46081f7d';
$client = new Twilio\Rest\Client($sid,$token);
$donor=new DonorRepository($this->db_conn);
$donors=$donor->get_by_blood_group($blood_group);
foreach ($donors as $donor_item) {
    $donor_id=$donor_item['donor_id'];
    $no=$donor_item['phone_number'];
    $firstname=$donor_item['first_name'];
    $lastname=$donor_item['last_name'];
    $msg="Dear $firstname $lastname we'd love you to donate again to help maintain stocks of your blood group";
    if ($donor->verify_donor($donor_id)) {
        if ($this->get_status()) {
            $message = $client->messages->create(
                $no, array('from'=>'KTCH',
                'body'=>$msg)
            );
           // $this->set_status('false');
        } else {
            echo"false";
        }
    }
}





} 
public function set_status($status){
    $query = ' UPDATE ' . $this->table . '
    SET status=:status
    WHERE id=1
    ';

    $stmt = $this->db_conn->prepare($query);

    $stmt->bindParam(':status', $status);
    $stmt->execute();
}

public function get_status(){
$query = "SELECT status FROM
" . $this->table;

$stmt = $this->db_conn->prepare($query);

        //Execute query
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

$sms_status = $row['status'];

if($sms_status == 'true'){
    return true;
}else {
    return false;
}



}
 }
?>
 

