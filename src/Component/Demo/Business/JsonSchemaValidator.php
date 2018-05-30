<?php


namespace App\Component\Demo\Business;


use JsonSchema\Validator;

class JsonSchemaValidator
{
    /**
     * @var string
     */
    private $schema;

    public function __construct(string $schema)
    {
        $this->schema = $schema;
    }

    public function validate(array $json): bool {
        $isValid = false;
        // Validate
        $validator = new Validator();
        $jsonObj = (object)$json;
        $validator->validate($jsonObj, (object)['$ref' => 'file://' . realpath($this->schema)]);

        if ($validator->isValid()) {
            $isValid = true;
        }
        //else {
            /**echo "JSON does not validate. Violations:\n";
            foreach ($validator->getErrors() as $error) {
                echo sprintf("[%s] %s\n", $error['property'], $error['message']);
            }**/
            //return false;
        //}
        return $isValid;
    }
}