<?php
	class FileManipulator{

		protected $home;

		public function __construct(){
			$this->home = $_SERVER['DOCUMENT_ROOT'].'/files';
		}
		public function create($filePath, $value = '') {
			// создает файл
			if($filePath[0] !='/'){
				$filePath = '/'.$filePath;
			}
			$pathArr = pathinfo($this->home . $filePath);//отделяем имя директории от имени файла
			$dirName = $pathArr['dirname']; //Определяем имя директории
			if (!file_exists($dirName)){ //Если такой директории нет...
				mkdir($dirName,0777,true); //...то создаём её
			} 
			file_put_contents($this->home. $filePath, $value); //создаём и записываем файл
			return "файл {$pathArr['filename']} успешно создан в директории $dirName";
			
		}
		public function delete($filePath) {
			// удаляет файл
			if($filePath[0] !='/'){
				$filePath = '/'.$filePath;
			}
			$filePath = $this->home . $filePath;

			if(file_exists($filePath)){
				unlink($filePath);
				return "файл $filePath усешно удалён";
			} else {
				return "По указанному пути файла не найдено";
			}
			
		}
		public function copy($filePath, $copyPath) {
			// копирует файл

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
			
			$pathArr = pathinfo($this->home . $filePath);//отделяем имя директории от имени файла
			$dirName = $pathArr['dirname']; //Определяем имя директории
			$fileName = $pathArr['filename']; //Определяем имя файла
			rename($this->home . $filePath, $this->home . $dirName . $fileName);
		}
		public function replace($filePath, $newPath) {
			// перемещает файл
			rename($filePath, $newPath);
		}
		public function weigh($filePath) {
			// узнает размер файла
			return "Размер файла $filePath:". filesize('test.txt') / (1024 * 1024) . " МегаБайт";
		}
	}
?>