<?php
 class Log
 {
 	public $filename;
    public $handle;

      public function __construct($prefix = 'log')
    {
        $this->filename = $prefix . date('Y-m-d');
        $this->handle = fopen($this->filename, 'a');
    }

 	public	function logMessage($logLevel, $message)
 		{
<<<<<<< HEAD
            $date = date('Y-m-d');
 			fwrite($this->handle, $date . ' ' . $logLevel . $message . ' ' . time() . PHP_EOL);
=======
            $date = date('l jS \of F Y h:i:s A');
 			fwrite($this->handle, $date . " " . $logLevel .  " " . $message . PHP_EOL);
>>>>>>> 883e176ddbd6d99b30c7c3ed751f0c15ca978c11
 			
        }

      

 	public function logError($message){
		$this->logMessage('[Error]', $message);
		}

	public function logInfo($message){
		$this->logMessage('[Info]', $message);
		}

    public function __destruct()
    {
        // echo "this has ended-" . time() . PHP_EOL;
        fclose($this->handle);
    }

}


?>