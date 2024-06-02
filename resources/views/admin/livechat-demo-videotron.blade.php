<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PH - Livechat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/user.jpg') }}" />

    <link rel="stylesheet" href="{{ asset('template/assets/vendors/sweetalert2/dist/sweetalert2.min.css') }}">
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
    }

    .speech-wrapper {
        padding: 10px 20px;
    }

    .speech-wrapper .bubble {
        width: 280px;
        height: auto;
        display: block;
        border-radius: 4px;
        position: relative;
    }

    .speech-wrapper .bubble .txt {
        padding: 8px 55px 8px 14px;
    }

    .speech-wrapper .bubble .txt .name {
        font-weight: 600;
        font-size: 12px;
        margin: 0 0 4px;
        margin-bottom: 0px;
    }

    .speech-wrapper .bubble .txt .message {
        font-size: 12px;
        margin: 0;
    }

    .speech-wrapper .bubble .txt .timestamp {
        font-size: 8px;
        position: absolute;
        bottom: 8px;
        right: 10px;
        text-transform: uppercase;
    }

    .speech-wrapper .bubble .bubble-arrow {
        position: absolute;
        width: 0;
        bottom: 42px;
        left: -16px;
        height: 0;
    }

    .speech-wrapper .bubble .bubble-arrow.alt {
        right: -2px;
        bottom: 40px;
        left: auto;
    }

    .speech-wrapper .bubble .bubble-arrow:after {
        content: "";
        position: absolute;
        border-radius: 0 20px 0;
        width: 24px;
        height: 37px;
        transform: rotate(154deg);
    }

    .speech-wrapper .bubble .bubble-arrow.alt:after {
        transform: rotate(45deg) scaleY(-1);
    }
</style>

<body
    style="{{ $event->videotron_flag_background === 'image'
        ? 'background: url(' . asset('uploads/' . $event->videotron_background_image) . ');background-size:cover'
        : 'background: ' . $event->videotron_color_code }};">

    <div id="chat-container">
        <div class="speech-wrapper">
            <div class="bubble" style="background-color: {{ $event->bubble_color_code_message_background }}">
                <div class="txt">
                    <p class="name" style="color: {{ $event->bubble_color_code_message_name }}">Alex</p>
                    <p class="message" style="color: {{ $event->bubble_color_code_message_time }}">Hey Benni, the party
                        is amazing! Did you try the punch?</p>
                    <span class="timestamp" style="color: {{ $event->bubble_color_code_message_text }}">10:20 pm</span>
                </div>
                <div class="bubble-arrow"></div>
            </div>
        </div>

        <div class="speech-wrapper">
            <div class="bubble" style="background-color: {{ $event->bubble_color_code_message_background }}">
                <div class="txt">
                    <p class="name" style="color: {{ $event->bubble_color_code_message_name }}">Benni</p>
                    <p class="message" style="color: {{ $event->bubble_color_code_message_time }}">Yeah, Alex! The punch
                        is great. Have you seen Jordan?</p>
                    <span class="timestamp" style="color: {{ $event->bubble_color_code_message_text }}">10:21 pm</span>
                </div>
                <div class="bubble-arrow"></div>
            </div>
        </div>

        <div class="speech-wrapper">
            <div class="bubble" style="background-color: {{ $event->bubble_color_code_message_background }}">
                <div class="txt">
                    <p class="name" style="color: {{ $event->bubble_color_code_message_name }}">Jordan</p>
                    <p class="message" style="color: {{ $event->bubble_color_code_message_time }}">I'm here, guys! Just
                        dancing with Taylor. This DJ rocks!</p>
                    <span class="timestamp" style="color: {{ $event->bubble_color_code_message_text }}">10:22 pm</span>
                </div>
                <div class="bubble-arrow"></div>
            </div>
        </div>

        <div class="speech-wrapper">
            <div class="bubble" style="background-color: {{ $event->bubble_color_code_message_background }}">
                <div class="txt">
                    <p class="name" style="color: {{ $event->bubble_color_code_message_name }}">Taylor</p>
                    <p class="message" style="color: {{ $event->bubble_color_code_message_time }}">Totally! The music
                        is fantastic. Who organized this party?</p>
                    <span class="timestamp" style="color: {{ $event->bubble_color_code_message_text }}">10:23 pm</span>
                </div>
                <div class="bubble-arrow"></div>
            </div>
        </div>

        <div class="speech-wrapper">
            <div class="bubble" style="background-color: {{ $event->bubble_color_code_message_background }}">
                <div class="txt">
                    <p class="name" style="color: {{ $event->bubble_color_code_message_name }}">Sam</p>
                    <p class="message" style="color: {{ $event->bubble_color_code_message_time }}">I think it was Chris
                        and Jamie. They did an awesome job!</p>
                    <span class="timestamp" style="color: {{ $event->bubble_color_code_message_text }}">10:24 pm</span>
                </div>
                <div class="bubble-arrow"></div>
            </div>
        </div>

        <div class="speech-wrapper">
            <div class="bubble" style="background-color: {{ $event->bubble_color_code_message_background }}">
                <div class="txt">
                    <p class="name" style="color: {{ $event->bubble_color_code_message_name }}">Chris</p>
                    <p class="message" style="color: {{ $event->bubble_color_code_message_time }}">Thanks, Sam! We
                        wanted everyone to have a blast.</p>
                    <span class="timestamp" style="color: {{ $event->bubble_color_code_message_text }}">10:25 pm</span>
                </div>
                <div class="bubble-arrow"></div>
            </div>
        </div>

        <div class="speech-wrapper">
            <div class="bubble" style="background-color: {{ $event->bubble_color_code_message_background }}">
                <div class="txt">
                    <p class="name" style="color: {{ $event->bubble_color_code_message_name }}">Jamie</p>
                    <p class="message" style="color: {{ $event->bubble_color_code_message_time }}">Glad you all are
                        enjoying it. Have you tried the snacks?</p>
                    <span class="timestamp" style="color: {{ $event->bubble_color_code_message_text }}">10:26 pm</span>
                </div>
                <div class="bubble-arrow"></div>
            </div>
        </div>

        <div class="speech-wrapper">
            <div class="bubble" style="background-color: {{ $event->bubble_color_code_message_background }}">
                <div class="txt">
                    <p class="name" style="color: {{ $event->bubble_color_code_message_name }}">Morgan</p>
                    <p class="message" style="color: {{ $event->bubble_color_code_message_time }}">Yes, the snacks
                        are
                        delicious! Who made the cupcakes?</p>
                    <span class="timestamp" style="color: {{ $event->bubble_color_code_message_text }}">10:27
                        pm</span>
                </div>
                <div class="bubble-arrow"></div>
            </div>
        </div>

        <div class="speech-wrapper">
            <div class="bubble" style="background-color: {{ $event->bubble_color_code_message_background }}">
                <div class="txt">
                    <p class="name" style="color: {{ $event->bubble_color_code_message_name }}">Casey</p>
                    <p class="message" style="color: {{ $event->bubble_color_code_message_time }}">Reese made them.
                        They're so good, right?</p>
                    <span class="timestamp" style="color: {{ $event->bubble_color_code_message_text }}">10:28
                        pm</span>
                </div>
                <div class="bubble-arrow"></div>
            </div>
        </div>

        <div class="speech-wrapper">
            <div class="bubble" style="background-color: {{ $event->bubble_color_code_message_background }}">
                <div class="txt">
                    <p class="name" style="color: {{ $event->bubble_color_code_message_name }}">Reese</p>
                    <p class="message" style="color: {{ $event->bubble_color_code_message_time }}">Thanks, everyone!
                        I'm glad you like them. Let's keep the party going!</p>
                    <span class="timestamp" style="color: {{ $event->bubble_color_code_message_text }}">10:29
                        pm</span>
                </div>
                <div class="bubble-arrow"></div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('template/assets/vendors/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Set background based on event properties
            @if ($event->videotron_flag_background === 'image')
                document.body.style.background =
                    "url('{{ asset('uploads/' . $event->videotron_background_image) }}')";
                document.body.style.backgroundSize = "cover";
            @else
                document.body.style.background = "{{ $event->videotron_color_code }}";
            @endif

            // Apply styling for bubbles
            const bubbleColor = "{{ $event->bubble_color_code_message_background }}";
            const nameColor = "{{ $event->bubble_color_code_message_name }}";
            const timeColor = "{{ $event->bubble_color_code_message_time }}";
            const textColor = "{{ $event->bubble_color_code_message_text }}";

            const bubbleArrowStyle = `
                .speech-wrapper .bubble .bubble-arrow:after {
                    border: 0 solid transparent;
                    border-top: 9px solid ${bubbleColor};
                }
            `;
            const messageNameStyle = `
                .speech-wrapper .bubble .txt .name {
                    color: ${nameColor};
                }
            `;
            const messageTimeStyle = `
                .speech-wrapper .bubble .txt .timestamp {
                    color: ${timeColor};
                }
            `;
            const messageTextStyle = `
                .speech-wrapper .bubble .txt .message {
                    color: ${textColor};
                }
            `;

            const style = document.createElement('style');
            style.innerHTML = bubbleArrowStyle + messageNameStyle + messageTimeStyle + messageTextStyle;
            document.head.appendChild(style);
        });


        // Function to scroll chat container to the bottom
        function scrollToBottom() {
            window.scrollTo(0, document.body.scrollHeight);
        }

        setTimeout(() => {
            scrollToBottom();
            Swal.fire({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                showCloseButton: true,
                allowEscapeKey: false,
                type: 'info',
                title: "You are seeing demo page.",
                customClass: {
                    popup: 'custom-swal-popup',
                    title: 'custom-swal-title',
                    icon: 'custom-swal-icon',
                }
            })
        }, 100);
    </script>
</body>

</html>
