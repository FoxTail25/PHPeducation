<?php
	class FileManipulator{

		protected $home;

		public function __construct(){
			$this->home = $_SERVER['DOCUMENT_ROOT'];
		}
		public function create($filePath, $value = '') {
			// создает файл
			$filePath = $this->addHomeAndSlash($filePath); // Добавляем $home и слеш (если его нет) 

			$pathArr = pathinfo($filePath);//отделяем имя директории от имени файла
			$dirName = $pathArr['dirname']; //Определяем имя директории
			$fileName = $pathArr['basename'];//Определяем имя файла

			if ($dirName and !file_exists($dirName)){ //Если такой директории нет...
				mkdir($dirName,0777,true); //...то создаём её
			} 
			file_put_contents($filePath, $value); //создаём и записываем файл
			return "файл $fileName успешно создан в директории $dirName";
			
		}
		public function delete($filePath) {
			// удаляет файл
			$filePath = $this->addHomeAndSlash($filePath); // Добавляем $home и слеш (если его нет) 

			if(file_exists($filePath)){
				unlink($filePath);
				return "файл $filePath усешно удалён";
			} else {
				return "По указанному пути файл не найден";
			}
			
		}
		public function copy($filePath, $copyPath) {
			// копирует файл
			if($filePath[0] !='/'){
				$filePath = $this->home . '/'.$filePath;
			}
			if($copyPath[0] !='/'){
				$copyPath = $this->home . '/'.$copyPath;
			}

			if(file_exists($filePath)){
				copy($filePath, $copyPath);
				return "файл $filePath успешно скопирован в $copyPath";
			} else {
				return "файл $filePath не найден";
			}
		
		}
		public function rename($filePath, $newName) {
			// переименовывает файл
			// вторым параметром принимает новое имя файла (только имя, не путь)
			if($filePath[0] !='/'){
				$filePath = $this->home . '/'.$filePath;
			}
			
			if(file_exists($filePath)){

				$pathArr = pathinfo($filePath);//отделяем имя директории от имени файла
				$dirName = $pathArr['dirname']; //Определяем имя директории
				$fileName = $pathArr['filename']; //Определяем имя файла


				rename($filePath, $dirName .$newName);
				return "файл $filePath успешно переименован в " .$this->home . $dirName . $newName;
			} else {
				return "файл $filepath не найден";
			}

		}
		public function replace($filePath, $newPath) {
			// перемещает файл
			rename($filePath, $newPath);
		}
		public function weigh($filePath) {
			// узнает размер файла
			return "Размер файла $filePath:". filesize('test.txt') / (1024 * 1024) . " МегаБайт";
		}
		private function addHomeAndSlash($filePath){ // Добавляет к пути "папку проекта" и слеш (если его не было);
			if($filePath[0] !='/'){
				$filePath = '/'.$filePath;
			}
			return $this->home .$filePath;
		}
	}
?>