<?php
namespace Kunstmaan\FormBundle\Tests\Entity;
use Kunstmaan\FormBundle\Entity\FormSubmissionField;
use Kunstmaan\FormBundle\Entity\FormSubmission;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-20 at 15:15:06.
 */
class FormSubmissionFieldTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FormSubmissionField
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new FormSubmissionField;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\FormBundle\Entity\FormSubmissionField::getId
     * @covers Kunstmaan\FormBundle\Entity\FormSubmissionField::setId
     */
    public function testSetGetId()
    {
        $object = $this->object;
        $id = 123;
        $object->setId($id);
        $this->assertEquals($id, $object->getId());
    }

    /**
     * @covers Kunstmaan\FormBundle\Entity\FormSubmissionField::getFieldName
     * @covers Kunstmaan\FormBundle\Entity\FormSubmissionField::setFieldName
     */
    public function testSetGetFieldName()
    {
        $object = $this->object;
        $fieldName = "someFieldName";
        $object->setFieldName($fieldName);
        $this->assertEquals($fieldName, $object->getFieldName());
    }

    /**
     * @covers Kunstmaan\FormBundle\Entity\FormSubmissionField::getLabel
     * @covers Kunstmaan\FormBundle\Entity\FormSubmissionField::setLabel
     */
    public function testSetGetLabel()
    {
        $object = $this->object;
        $label = "Some label";
        $object->setLabel($label);
        $this->assertEquals($label, $object->getLabel());
    }

    /**
     * @covers Kunstmaan\FormBundle\Entity\FormSubmissionField::getSubmission
     * @covers Kunstmaan\FormBundle\Entity\FormSubmissionField::setSubmission
     */
    public function testSetGetSubmission()
    {
        $object = $this->object;
        $submission = new FormSubmission();
        $submission->setId(123);
        $object->setSubmission($submission);
        $retrievedSubmission = $object->getSubmission();
        $this->assertEquals($submission, $retrievedSubmission);
        $this->assertEquals($submission->getId(), $retrievedSubmission->getId());
    }

    /**
     * @covers Kunstmaan\FormBundle\Entity\FormSubmissionField::__toString
     */
    public function test__toString()
    {
        $stringValue = $this->object->__toString();
        $this->assertNotNull($stringValue);
        $this->assertTrue(is_string($stringValue));
    }
}
