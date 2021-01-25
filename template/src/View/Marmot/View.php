<?php
namespace {@namespaceCaps}\View;

use Marmot\Interfaces\IView;
use Marmot\Framework\View\JsonApiTrait;

/**
 * @codeCoverageIgnore
 */
class {@nameCaps}View implements IView
{
    use JsonApiTrait;

    protected $rules;

    protected $data;
    
    protected $encodingParameters;

    public function __construct($data = '', $encodingParameters = null)
    {
        $this->data = $data;
        $this->encodingParameters = $encodingParameters;

        $this->rules = array(
            \{@nameCaps}\Model\{@nameCaps}::class =>
            \{@nameCaps}\View\{@nameCaps}Schema::class
        );
    }

    public function setData($data) : void
    {
        $this->data = $data;
    }
    
    public function display()
    {
        return $this->jsonApiFormat($this->data, $this->rules, $this->encodingParameters);
    }
}
