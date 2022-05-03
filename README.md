### Example
* There MUST be one blank line around class body, but there MUST be **no blank lines** around anonymous class body.
  
  ```php
  <?php
  class Test {
  
      public function method() {
          $obj = new class extends Foo {
              public function overriddenMethod() {
                  // code body
              }
          };
      }
  
  }
  ```

### `ShockedPlot7560/blank_line_around_class_body`

Ensure that a class body contains one blank line after its definition and before its end:

```diff
--- Original
+++ New
@@ @@
  <?php
  class Test {
+
      public function func() {
          $obj = new class extends Foo {
+
              public $prop;
+
          }
      }
+
  }
```