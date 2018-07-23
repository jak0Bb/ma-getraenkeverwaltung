Feature: Add mixin to the current node
    In order to add a mixin to the current node
    As a user that is logged into the shell
    I should be able to run a command which does that

    Background:
        Given that I am logged in as "testuser"
        And the "session_data.xml" fixtures are loaded

    Scenario: Add a mixin to the current node
        Given the current node is "/tests_general_base"
        And I execute the "node:mixin:add . mix:versionable --no-ansi" command
        And I save the session
        Then the command should not fail
        And the node at "/tests_general_base" should have the mixin "mix:versionable"
