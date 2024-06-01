<?php


namespace app\model;
use Connect_database, PDO, InvalidArgumentException;

require 'database.php';


class User extends Connect_database {
    
    /**
     * private properties
     */
    protected $id;
    protected $name;
    protected $email;
    protected $phone;
    protected $country;
    protected $password;

    /**
     * constuction method
     */
    public function __construct($name = null, $email = null, $phone = null, $country = null, $password = null) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->country = $country;
        $this->password = $password;
    }

    /**
     * getters
     */
    public function get_id() { return $this->id; }
    public function get_name() { return $this->name; }
    public function get_email() { return $this->email; }
    public function get_phone() { return $this->phone; }
    public function get_country() { return $this->country; }
    public function get_password() { return $this->password; }

    /**
     * setters
     */
    public function set_name($value) { $this->name = $value; }
    public function set_email($value) { $this->email = $value; }
    public function set_phone($value) { $this->phone = $value; }
    public function set_country($value) { $this->country = $value; }
    public function set_password($value) { $this->password = $value; }

    /**
     * create a new user and insert it into the database
     */
    public function insert_user() {
        $stmt = static::connect_database()
        ->prepare('INSERT INTO users (name, email, phone, country, password) VALUES (?,?,?,?,?)');
        $stmt->execute([
            $this->name,
            $this->email,
            $this->phone,
            $this->country,
            $this->password
        ]);
    }

    /**
     * update user data
     */
    public function update_user($id) {
        $stmt = static::connect_database()
        ->prepare('UPDATE users SET name = ?, email = ?, phone = ?, country = ?, password = ? WHERE id = ?');
        if ($stmt->execute([
            $this->name,
            $this->email,
            $this->phone,
            $this->country,
            $this->password,
            $id
        ])) { return true; }
    }

    /**
     * delete an existing user
     */
    public static function destroy_user($id) {
        $stmt = static::connect_database()->prepare('DELETE FROM users WHERE id = ?');
        if ($stmt->execute([$id])) { return true; }
    }

    /**
     * fetch all users from the database
     */
    public static function find_all() {
        $stmt = static::connect_database()->query('SELECT * FROM users');
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'User');
        return $stmt->fetchAll();
    }

    /**
     * fetch one user
     */
    public static function find($id) {
        return current(static::where('id', $id, '='));
    }

    /**
     * find users depends on a condition
     */
    public static function where($column, $value, $operator) {
        $allowed_columns = ['id', 'name', 'email', 'phone', 'country'];
        $allowed_operators = ['=', '>', '<', '>=', '<=', '<>', 'LIKE'];
    
        if (!in_array($column, $allowed_columns)) {
            throw new InvalidArgumentException("Invalid column name.");
        }
    
        if (!in_array($operator, $allowed_operators)) {
            throw new InvalidArgumentException("Invalid operator.");
        }
    
        $query = "SELECT * FROM users WHERE $column $operator :value";
    
        $stmt = static::connect_database()->prepare($query);
        
        $stmt->bindParam(':value', $value);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'User');
        return $stmt->fetchAll();

    }

    
    







}