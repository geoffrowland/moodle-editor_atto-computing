@editor @editor_atto @atto @atto_computing @_bug_phantomjs
Feature: Atto computing editor
  To teach maths to students, I need to write computings

  @javascript
  Scenario: Create a computer science equation
    Given I log in as "admin"
    When I navigate to "Edit profile" node in "My profile settings"
    And I set the field "Description" to "<p>Computing test</p>"
    # Set field on the bottom of page, so computing editor dialogue is visible.
    And I expand all fieldsets
    And I set the field "Picture description" to "Test"
    And I select the text in the "Description" Atto editor
    And I click on "Show more buttons" "button"
    And I click on "Computer science equation editor" "button"
    And I set the field "Edit computer science equation using" to " = 1 \div 0"
    And I click on "\infty" "button"
    And I click on "Save computer science equation" "button"
    And I click on "Update profile" "button"
    Then "\infty" "text" should exist

  @javascript
  Scenario: Edit a computer science equation
    Given I log in as "admin"
    When I navigate to "Edit profile" node in "My profile settings"
    And I set the field "Description" to "<p>\( \bmod \)</p>"
    # Set field on the bottom of page, so computing editor dialogue is visible.
    And I expand all fieldsets
    And I set the field "Picture description" to "Test"
    And I select the text in the "Description" Atto editor
    And I click on "Show more buttons" "button"
    And I click on "Computer science equation editor" "button"
    Then the field "Edit computer science equation using" matches value " \bmod "
    And I click on "Save computer science equation" "button"
    And the field "Description" matches value "<p>\( \bmod \)</p>"
