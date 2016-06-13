<div class="nav-link">
    <ul>
        <li><a class="page" data-bind="privacy">Privacy Policy</a></li>
        <li><a class="page" data-bind="terms">Terms of Use</a></li>
        <li><a class="page" data-bind="support">Support</a></li>
    </ul>
    
    <div id="support" class="modalDialog">
        <div>
            <a title="Close" class="close" data-bind="support">X</a>
            <h2>Support</h2>
            <div>
                <form name="support">
                    <h5 style="padding-left: 10px; text-align: left; color: {{feedback_color}}" ng-show="showError">{{error}}</h5>
                    <input type="text" placeholder="Subject"  name="subject" ng-model="subject" /><br>
                    <textarea placeholder="Details"  name="details" ng-model="details"></textarea><br>
                    <input type="button" value="Send" class="send-support" ng-click="sendSupport()"/>
                    <input type="button" value="Close" class="close-support" ng-click="close()" />
                </form>
            </div>
        </div>
    </div>
    
    <div id="privacy" class="modalDialog">
        <div>
            <a title="Close" class="close" data-bind="privacy">X</a>
            <h2>Privacy Policy</h2>
            <div>
                <h4>Rule one</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec lacinia, lacus ut bibendum euismod, felis velit interdum nisl,
                    non blandit diam eros at nibh. Nullam vel ex nec lorem consectetur pulvinar
                    id ut metus. Nulla at lectus sit amet est aliquet scelerisque. Nunc pharetra 
                    pharetra nulla eu porttitor. Aenean nec neque et justo accumsan laoreet mattis
                    fringilla dolor. In egestas, nisl eget bibendum feugiat, justo purus dignissim
                    dui, ac ultrices turpis risus ac nisl. Ut ac egestas lorem. Aliquam erat volutpat.
                </p>
                <h4>Rule 2</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec lacinia, lacus ut bibendum euismod, felis velit interdum nisl,
                    non blandit diam eros at nibh. Nullam vel ex nec lorem consectetur pulvinar
                    id ut metus. Nulla at lectus sit amet est aliquet scelerisque. Nunc pharetra 
                    pharetra nulla eu porttitor. Aenean nec neque et justo accumsan laoreet mattis
                    fringilla dolor. In egestas, nisl eget bibendum feugiat, justo purus dignissim
                    dui, ac ultrices turpis risus ac nisl. Ut ac egestas lorem. Aliquam erat volutpat.
                </p>
            </div>
        </div>
    </div>

    <div id="terms" class="modalDialog">
        <div>
            <a title="Close" class="close" data-bind="terms">X</a>
            <h2>Terms of Use</h2>
            <div>
                <h4>Rule one</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec lacinia, lacus ut bibendum euismod, felis velit interdum nisl,
                    non blandit diam eros at nibh. Nullam vel ex nec lorem consectetur pulvinar
                    id ut metus. Nulla at lectus sit amet est aliquet scelerisque. Nunc pharetra 
                    pharetra nulla eu porttitor. Aenean nec neque et justo accumsan laoreet mattis
                    fringilla dolor. In egestas, nisl eget bibendum feugiat, justo purus dignissim
                    dui, ac ultrices turpis risus ac nisl. Ut ac egestas lorem. Aliquam erat volutpat.
                </p>
                <h4>Rule 2</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec lacinia, lacus ut bibendum euismod, felis velit interdum nisl,
                    non blandit diam eros at nibh. Nullam vel ex nec lorem consectetur pulvinar
                    id ut metus. Nulla at lectus sit amet est aliquet scelerisque. Nunc pharetra 
                    pharetra nulla eu porttitor. Aenean nec neque et justo accumsan laoreet mattis
                    fringilla dolor. In egestas, nisl eget bibendum feugiat, justo purus dignissim
                    dui, ac ultrices turpis risus ac nisl. Ut ac egestas lorem. Aliquam erat volutpat.
                </p>
            </div>
        </div>
    </div>

    
</div>

