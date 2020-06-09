<?php

class ApiController extends Common_Controller {
	private $freeContent = array();
	private $premiumContent = array();

	public function __construct() {
		parent::__construct();
		$this->load->model('Performer_model', 'performer');
	}

	public function setFreeContent($value) {
		$this->freeContent = $value;
		return $this;
	}
	public function setPremiumContent($value) {
		$this->premiumContent = $value;
		return $this;
	}
	public function searchModel() {

		if (!$this->isPost()) {
			$this->setQ(($this->input->get('q')) ? $this->input->get('q') : '');
			if ($this->q) {
				$this->setOption(array(
					'name' => $this->q,
				));
				$this->setPerformer($this->performer->all(true, $this->option));
			} else {
				$this->setPerformer($this->performer->all(true, $this->option));
			}
			if ($this->performer) {
				foreach ($this->performer as $performer) {
					$this->data[] = array(
						'id' => $performer['id'],
						'name' => $performer['name'],
						'slug' => strtolower(str_replace(' ', '_', ($performer['name']))),
						'profile_image_url_https' => base_url() . 'assets/profile_image/' . $performer['image'],
						'display_name' => $performer['display_name'],
					);
				}
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode($this->data));
			} else {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode([]));
			}
		} else {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode(array(
					'status' => array(
						'code' => Common_Controller::HTTP_METHOD_NOT_ALLOWED,
						'text' => Common_Controller::$statusTexts[405],
					),
					'message' => Common_Controller::$statusTexts[405],
				)));
		}
	}
	public function filterModel() {

		if (!$this->isPost()) {
			$this->setRequest($this->input->get());
			if (!empty($this->request) && is_array($this->request)) {
				$this->setFilterData($this->request);
			}
			$total_perfomers = $this->performer->total_perfomers($this->filterData);
			if ($this->filterData) {
				$this->setPerformer($this->performer->filter($this->filterData));
			} else {
				$this->setPerformer($this->performer->all(true));
			}

			// echo "<pre>";
			// print_r($this->performer);
			// exit;
			if ($this->performer) {
				foreach ($this->performer as $performer) {
					/*	$this->data[] = array(
						'id' => $performer['id'],
						'name' => $performer['name'],
						'slug' => strtolower(str_replace(' ', '_', ($performer['name']))),
						'display_name' => $performer['display_name'],
						'price_in_private' => $performer['price_in_private'],
						'price_in_group' => $performer['price_in_group'],
						'img' => (isset($performer['image'])) ? base_url('assets/profile_image/' . $performer['image']) : base_url('assets/images/noimage.png'),
					);*/
					$performType = '';
					if ($performer['price_in_private'] && $performer['price_in_private'] != '0.00') {
						$performType = 'In Private';
					}
					if ($performer['price_in_group'] && $performer['price_in_group'] != '0.00') {
						$performType = 'In Group';
					}

					$link = base_url('performer/' . $performer['id'] . '/' . strtolower(str_replace(' ', '_', ($performer['name']))));
					$img = (isset($performer['image'])) ? base_url('assets/profile_image/' . $performer['image']) : base_url('assets/images/noimage.png');
					$html = '';

					$html .= '
        <div class="col-grid">
            <figure class="active">
                <span class="strapbox">' . $performType . '</span>
                <a href="' . base_url($link) . '" class="list-image-view">
                <img src="' . $img . '" alt="' . $performer['display_name'] . '"></a>
                <figcaption>
                <h4><span class="active-circle"></span><a href="' . $link . '">' . $performer['display_name'] . '</a></h4>
                <ul>
                    <li>PRIVATE: <span>£' . $performer['price_in_private'] . '</span> p/m</li>
                    <li>GROUP: <span>£' . $performer['price_in_group'] . '</span> p/M</li>
                </ul>
                </figcaption>
            </figure>
        </div';

					$this->data[] = $html;
				}
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'status' => TRUE,
						'total_page' => ceil($total_perfomers / 10),
						'total_perfomers' => $total_perfomers,
						'data' => $this->data,
					)));
			} else {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(200)
					->set_output(json_encode(array(
						'status' => FALSE,
						'data' => [],
						'message' => 'Sorry, we can\t find any results that match your criteria.'
					)));
			}
		} else {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(405)
				->set_output(json_encode(array(
					'status' => FALSE,
					'message' => Common_Controller::$statusTexts[405],
				)));
		}
	}

	public function contents() {
		if (!$this->isPost()) {
			$this->setRequest($this->input->get());
			if (!empty($this->request) && is_array($this->request)) {
				$this->setFilterData($this->request);
			}

			if ($this->filterData) {
				$this->setFreeContent($this->performer->getFreeContent($this->filterData));
				$this->setPremiumContent($this->performer->getPremiumContent($this->filterData));
			}

			$this->setResponse(array(
				'freeContents' => $this->freeContent,
				'premiumContents' => $this->premiumContent,
				'lockIconPath' => base_url() . 'assets/images/lock-icon.png',
			));
			return $this->output
				->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode($this->response));
		} else {
			return $this->output
				->set_content_type('application/json')
				->set_status_header(405)
				->set_output(json_encode(array(
					'message' => Common_Controller::$statusTexts[405],
				)));
		}
	}
}