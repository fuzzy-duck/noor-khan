<div class="number"></div>

<script>
    $(".number").hover(
        function () {
            $(".popup").addClass("shown");
        },
        function () {
            $(".popup").removeClass("shown");
        }
    );
</script>

<style>

.popup-01 {
                    background-color: $darkBlue;
                    border: 3px solid $white;
                    max-width: 300px;
                    margin: 5px;
                    padding: $padding;
                    opacity: 0; 
                    transition: 0.8s;
                    transition-timing-function: cubic-bezier(.63,-0.33,.32,1.4);
                    position: relative;
                    .close {
                        grid-column: 2;
                        top: 47px;
                        right: 50px;
                          color: white;
                          z-index: 3;
                          cursor: pointer;
                        span,
                        span:before,
                        span:after {
                          border-radius: 4px;
                          height: 3px;
                          width: 35px;
                          background: white;
                          position: absolute;
                          display: block;
                          content: '';
                        }
                        span {
                          background: transparent;
                        }
                        span:before {
                        transform: rotate(45deg);
                        }
                        span:after {
                        transform: rotate(-45deg);
                        }
                      }
                      .outer-close {
                          position: absolute;
                          right: 0;
                          top: 0;
                          width: 85px;
                          height: 85px;
                          cursor: pointer;
                      }
                    .box {
                        width: 100%;
                        height: 200px;
                        .img {
                            width: 100%;
                            height: 100%;
                            background: $grey;
                            margin-left: 0;
                            //background: url(assets/img/placeholder.svg) no-repeat center center;
                            //background-size: contain;
                        }
                    }
                    .links {
                        display: block;
                        grid-template-columns: repeat(2, 1fr);
                        margin-bottom: 0px;
                        padding: 0 8px;
                    }
                }

                .popup-02 {
                    background-color: $darkBlue;
                    border: 3px solid $white;
                    max-width: 300px;
                    margin: 5px;
                    padding: $padding;
                    opacity: 0; 
                    transition: 0.8s;
                    transition-timing-function: cubic-bezier(.63,-0.33,.32,1.4);
                    position: relative;
                    .close {
                        grid-column: 2;
                        top: 47px;
                        right: 50px;
                        color: white;
                        z-index: 3;
                        cursor: pointer;
                        span,
                        span:before,
                        span:after {
                          border-radius: 4px;
                          height: 3px;
                          width: 35px;
                          background: white;
                          position: absolute;
                          display: block;
                          content: '';
                        }
                        span {
                          background: transparent;
                        }
                        span:before {
                        transform: rotate(45deg);
                        }
                        span:after {
                        transform: rotate(-45deg);
                        }
                      }
                      .outer-close {
                          position: absolute;
                          right: 0;
                          top: 0;
                          width: 85px;
                          height: 85px;
                          cursor: pointer;
                      }
                    .box {
                        width: 100%;
                        height: 200px;
                        .img {
                            width: 100%;
                            height: 100%;
                            background: $grey;
                            margin-left: 0;
                            //background: url(assets/img/placeholder.svg) no-repeat center center;
                            //background-size: contain;
                        }
                    }
                    .links {
                        display: block;
                        grid-template-columns: repeat(2, 1fr);
                        margin-bottom: 0px;
                        padding: 0 8px;
                    }
                }
                
                .shown {
                    transform: translate(0px, -20px);
                    opacity: 1;
                }

</style>