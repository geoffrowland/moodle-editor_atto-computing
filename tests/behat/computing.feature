@editor @editor_atto @atto @atto_computing @_bug_phantomjs
Feature: Atto computing editor
  To teach computer science to students, I need to write computing equations

  @javascript
  Scenario: Create a computing equation
    Given I log in as "admin"
    When I navigate to "Edit profile" node in "My profile settings"
    And I set the field "Description" to "<p>Computing test</p>"
    # Set field on the bottom of page, so computing editor dialogue is visible.
    And I expand all fieldsets
    And I set the field "Picture description" to "Test"
    And I select the text in the "Description" Atto editor
    And I click on "Show more buttons" "button"
    And I click on "Computing editor" "button"
    And I set the field "Edit computing using" A \cdot B"
    And I click on "\iff" "button"
    And I set the field "Edit computing using" to "\overline{\overline{A} + \overline{B}}"
    And I click on "Save computing" "button"
    And I click on "Update profile" "button"
    Then "De Morgan's Law" "text" should exist

  @javascript
  Scenario: Edit a computing equation
    Given I log in as "admin"
    When I navigate to "Edit profile" node in "My profile settings"
    And I set the field "Description" to "<p>\( A \cdot B \)</p>"
    # Set field on the bottom of page, so computing editor dialogue is visible.
    And I expand all fieldsets
    And I set the field "Picture description" to "Test"
    And I select the text in the "Description" Atto editor
    And I click on "Show more buttons" "button"
    And I click on "Computing editor" "button"
    Then the field "Edit computing using" matches value " A \cdot B "
    And I click on "Save computing" "button"
    And the field "Description" matches value "<p>\( A \cdot B \)</p>"
