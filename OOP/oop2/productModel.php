<?php

class productModel extends Database{
    public $table = "product";

    public function __construct($ipDatabase, $userDatabase, $passDatabase, $databaseName)
    {
        parent::__construct($ipDatabase, $userDatabase, $passDatabase, $databaseName);
    }

    /**
     * Lấy ra tất các bản ghi từ bảng products
     */

    public function index()
    {
        $sqlSelect = "SELECT * FROM ".$this->table;
        $result = $this->connection->query($sqlSelect);
        return $result;
    }


    /**
     * $data chính là mảng chứa dữ liệu để tạo 1 bản ghi mới
     * không cần cái key id array('product_name' => 'son môi')
     * Lấy ra tất các bản ghi từ bảng products
     */

    public function create($data)
    {
        // $this->connection
        if (isset($data["product_name"]) && isset($data["product_desc"]) && isset($data["created"])) {
            $product_name = $data["product_name"];
            $product_desc = $data["product_desc"];
            $created = $data["created"];
            $sqlInsert = "INSERT INTO " . $this->table . " (product_name, product_desc, created) VALUES ('$product_name', '$product_desc', '$created')";

            // Thực hiện cau lệnh SQL

            return $this->connection->query($sqlInsert);
        }

    }


    /**
     * $data chính là mảng chứa dữ liệu để tạo 1 bản ghi mới
     * $data cần đủ các cột trong CSDL của bảng products
     * Lấy ra tất các bản ghi từ bảng products
     */

    public function edit($data)
    {
        if (isset($data["product_name"]) && isset($data["product_desc"]) && isset($data["created"])){
            $id = (int) $data["id"];
            $product_name = $data["product_name"];
            $product_desc = $data["product_desc"];
            $created = $data["created"];
            $sqlUpdate = "UPDATE products SET product_name='$product_name',product_desc='$product_desc',created=$created WHERE id=$id";

            // Thực hiện cau lệnh SQL

            return $this->connection->query($sqlUpdate);
        }
    }

    /**
     * Xóa
     * @param $prodcut_id
     */

    public function delete($product_id){

        $sqlDelete = "DELETE FROM products WHERE  id = $product_id";

        // Thực hiện cau lệnh SQL

        return $this->connection->query($sqlDelete);

    }
}