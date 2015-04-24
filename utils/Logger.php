<?php
 class Log
 {
 	public $filename;
    public $handle;

      public function __construct($prefix = 'log')
    {
        $this->filename = $prefix . date('Y-m-d') . time() ."-log";
        $this->handle = fopen($this->filename, 'a');
    }

 	public	function logMessage($logLevel, $message)
 		{
            $date = date('l jS \of F Y h:i:s A');
 			fwrite($this->handle, . ' ' . $date . $logLevel . $message . PHP_EOL);
 			
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