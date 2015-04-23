<?php
require_once 'BaseModel.php';

class Ad extends BaseModel {

    protected static $table = 'ads';






    /*
     * Persist the object to the database
     */
    // public function save()
    // {
    //     // @TODO: Ensure there are attributes before attempting to save
    //         if(empty($this->attributes['email'])){
    //                 $this->insert();
    //             }else{
    //                 $this->update();
    //             }
    //     protected function update()
    //             $query = 'SELECT * FROM users WHERE email = :email';
    //             $stmt = self::$dbc->prepare($query);
    //             $stmt->bindValue(':email',$this->email, PDO::PARAM_STR);
    //             $stmt->execute();
    //             $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // @TODO: Perform the proper action - if the `id` is set, this is an update, if not it is a insert
            

        // Ensure that update is properly handled with the id key

        // After insert, add the id back to the attributes array so the object can properly reflect the id
        // protected function insert() 

                // $stmt = self::$dbc->prepare("INSERT INTO" static::$table "(title, price, location, phone, image, description, date_posted)
                // VALUES (:title, :price, :location, :phone, :image, :description, :date_posted)");
        // You will need to iterate through all the attributes to build the prepared query
            //    foreach ($table as $table) {
            //     $stmt = $dbc->prepare($query);
            //     $stmt->bindValue(':title', $this->title, PDO::PARAM_STR);
            //     $stmt->bindValue(':price',$this->price, PDO::PARAM_STR);
            //     $stmt->bindValue(':location', $this->location, PDO::PARAM_STR);
            //     $stmt->bindValue(':phone', $this->phone, PDO::PARAM_STR);
            //     $stmt->bindValue(':image', $this->image, PDO::PARAM_STR);
            //     $stmt->bindValue(':description', $this->description, PDO::PARAM_STR);
            //     $stmt->bindValue(':date_posted', $this->date_posted, PDO::PARAM_STR);                
            //     $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            //     $stmt->execute();
            // }
        // Use prepared statements to ensure data security
}           


