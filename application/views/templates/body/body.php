<body class="mobile-screen <?php if ($this->uri->segment(1) == "admin") {
                                echo "on-dashboard";
                            } else if ($this->uri->segment(1) == "auth") {
                                echo "on-auth";
                            } ?>">
    <div class="<?php if ($this->uri->segment(1) == "admin" && $this->uri->segment(2) != "store") {
                    echo "dashboard";
                } else if ($this->uri->segment(1) == "auth") {
                    echo "auth";
                } else if ($this->uri->segment(2) == "store") {
                    echo "store";
                } else if ($this->uri->segment(1) == "detail") {
                    echo "dashboard";
                } ?>" id="app">