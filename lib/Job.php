<?php 
    class Job {
        private $db;
        public function __construct(){
            $this->db = new Database;
        }

        //Get All Jobs
        public function getAllJobs(){
            $this->db->query('SELECT jobs.*, categories.name AS cname 
            FROM jobs 
            INNER JOIN categories 
            ON jobs.category_id = categories.id 
            ORDER BY post_date DESC;
           ');
        
            //Assign Result Set
            $results = $this->db->resultSet();

            return $results;
        }

        public function getCategories(){
            $this->db->query('SELECT * FROM categories');
        
            //Assign Result Set
            $results = $this->db->resultSet();

            return $results;
        }

        public function getByCategory($category){
            $this->db->query('SELECT jobs.*, categories.name AS cname 
            FROM jobs 
            INNER JOIN categories 
            ON jobs.category_id = categories.id 
            WHERE jobs.category_id = $category
            ORDER BY post_date DESC');
        
            //Assign Result Set
            $results = $this->db->resultSet();

            return $results;
        }

        public function getCategory($category){
            $this->db->query('SELECT * FROM categories WHERE id = :category_id');
            
            $this->db->bind('category_id', $category_id);
            //Assign Row
            $row = $this->db->single();

            return $row;
           
        }

    }


?>