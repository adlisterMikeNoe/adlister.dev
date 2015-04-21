<?php
require_once 'BaseModel.php';

class User extends BaseModel {

    protected static $table = 'user';

 }
  public function save()
    {
        // @TODO: Ensure there are attributes before attempting to save
            if(empty($this->attributes['email'])){
                    $this->insert();
                }else{
                    $this->update();
                }
        protected function update()
                $query = 'SELECT * FROM users WHERE email = :email';
                $stmt = self::$dbc->prepare($query);
                $stmt->bindValue(':email',$this->email, PDO::PARAM_STR);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // @TODO: Perform the proper action - if the `id` is set, this is an update, if not it is a insert
            

        // Ensure that update is properly handled with the id key

        // After insert, add the id back to the attributes array so the object can properly reflect the id
        protected function insert() 

                $stmt = $stmt = self::$dbc->prepare("INSERT INTO" static::$table "(first_name, last_name, email, user_name, password)
                VALUES (:name, :first_name, :last_name, :email, :user_name)");
        // You will need to iterate through all the attributes to build the prepared query
               foreach ($table as $table) {
                $stmt = $dbc->prepare($query);
                $stmt->bindValue(':first_name', $this->first_name, PDO::PARAM_STR);
                $stmt->bindValue(':last_name', $this->last_name, PDO::PARAM_STR);
                $stmt->bindValue(':email',$this->email, PDO::PARAM_STR);
                $stmt->bindValue(':user_name', $this->user_name, PDO::PARAM_STR);
                $stmt->bindValue(':password', $this->password, PDO::PARAM_STR);
                $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
                $stmt->execute();
            }
        // Use prepared statements to ensure data security
            
    }
?>