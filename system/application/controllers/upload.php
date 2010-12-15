<?php

	class Upload extends KK_Controller {
		
		
		/**
		 *	用于编辑器上传图片~  必须登录
		 */
		function img() {
			login_redirect();
			
			// 上传目录，根据年月日
			$config['upload_path'] = './static/upload/img/' . date('Y/m/d/');
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '1920';
			$config['max_height'] = '1200';
			$config['encrypt_name'] = TRUE;
			
			// 创建目录，避免目录未创建出错
			$this->_createDir( $config['upload_path'] );
			
			$this->load->library( 'upload', $config );
			
			if ( ! $this->upload->do_upload('imgFile') ) {
				$error = array(
					'error'=> 1,
					'message' =>  $this->upload->display_errors(),
				);
				
				echo json_encode($error);
				exit();
				
			} else {
			
				// 上传成功, 获取上传了的文件信息
				$data = $this->upload->data();
				
				// 图片有时会太大呢，切割它呗!!!!
				if ( $data['image_width'] > KK_IMG_RESIZE ) {
					$img_config['image_library'] = 'gd2';
					$img_config['source_image'] = $data['full_path'];
					$img_config['create_thumb'] = FALSE;
					$img_config['maintain_ratio'] = TRUE;
					$img_config['width'] = KK_IMG_RESIZE_WIDTH;
					$img_config['height'] = KK_IMG_RESIZE_HEIGHT;
					$this->load->library('image_lib', $img_config );
					$this->image_lib->resize();
				}
				
				
				$success = array(
					'error' => 0,
					'url' => static_url('upload/img/'.date('Y/m/d/').$data['file_name']), // 对于当前服务器，图片所在网址(静态)
				);
				
				echo json_encode($success);
				exit();
				
			}
		}
		
		
		
		/**
		 *	创建目录函数，用于上传头像是自动生成用户的头像图片存放文件夹
		 */
		function _createDir($path) {
		   if (!file_exists($path)) {
		   	
			$this->_createDir(dirname($path));
		
			mkdir($path, 0777);
		   }
		}
	}