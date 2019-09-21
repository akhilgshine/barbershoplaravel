@extends('layout.app')
@section('content')
    <div class="container main-container">
        <div class="row">
            <div class="col-sm-12 bg-white" style="margin-bottom: 15px;">
                <img src="./Images/hero_1.jpg" class="img-responsive" alt="banner"
                     style="padding-top: 15px; margin-bottom: 15px; " />
                <h3 class="text-center">How it works? Here our expert.</h3>
                <div class="row" style="padding-top: 15px; padding-bottom: 15px; ">
                    <div class="col-sm-4">
                        <img src="./Images/21138817_l.jpg" class="img-responsive img-thumbnail" alt="banner" />
                    </div>
                    <div class="col-sm-8">
                        <p>If you’re asking yourself “how can I deal with my aching neck and shoulders?” and you’re looking for
                            massage therapy in Hamilton then give me a call because looking after aching muscles is what I’ve been
                            doing for the past fourteen years, and with thousands of satisfied customers I can happily reassure you
                            that this is massage therapy that works! While neck and shoulder pain is possibly one of the most common
                            muscle ailments it’s not the only one I deal with so whether it’s legs, back, neck, shoulders, or where
                            ever just give me a call.</p>
                        <p>It doesn’t matter what the activity is, from a walk in the park to hike across the Alps – through all
                            walks of life we sometimes find ourselves needing that little bit of extra attention, and that’s exactly
                            what I do for you at MuscleWorx.</p>
                        <p>At MuscleWorx I offer a range of massage treatments, from a comfortable relaxation massage to
                            specialised sports massage and deep tissue massage techniques designed to identify and target areas of
                            specific concern.</p>
                        <p> My Hillcrest massage clinic is quiet and easy to find just a few kilometres from Hamilton’s CBD, and
                            your comfort is guaranteed with our ergonomic massage tables designed and made exclusively for
                            MuscleWorx.</p>
                        <p>So what are you waiting for? If you’re training, recovering, rewarding yourself, or just relaxing, then
                            Hamilton’s MuscleWorx Massage Clinic is the place you want to be.</p>
                    </div>
                </div>
                <hr />
                <h3 class="text-center">Our Services</h3>
                <div class="row" style="padding-top: 15px; padding-bottom: 15px; ">

                    <!-- Nav tabs -->
                    <div class="col-md-4 col-sm-12">
                        <ul class="nav nav-tabs nav-pills nav-stacked" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                                      data-toggle="tab">Sports Massage</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Deep
                                    Tissue Massage</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                                       data-toggle="tab">Therapeutic Massage</a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab"
                                                       data-toggle="tab">Relaxation Massage</a></li>
                        </ul>
                    </div>

                    <!-- Tab panes -->
                    <div class="col-md-8 col-sm-12">
                        <div class="tab-content" style="min-height: 280px; max-height: 280px; overflow-y: auto;">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <h3 style="margin-top: 0px;">Sports Massage</h3>
                                <p>Sports and remedial massage is an effective and beneficial form of physical therapy, not only for
                                    active sports people, or those requiring therapy after a soft tissue injury, but also for those
                                    seeking relief from muscular tension or simply to maintain healthy muscles.</p>

                                <p>Sports and remedial massage is the skill of manipulating soft tissues of the body and isolating
                                    individual muscle groups using specific and specialised techniques including stroking, kneading and
                                    compressing.</p>

                                <p>Providing regular programmes of sports massage, such as pre-event and post-event massage,
                                    mobilisation and stretching can enhance the physical, physiological and psychological well being of
                                    active individuals.</p>

                                <p>Let me work with you to develop a massage treatment plan that keeps you in peak condition leading
                                    up to, and beyond your event.</p>
                                For this service <a href="#">Book Now</a>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <h3 style="margin-top: 0px;">Deep Tissue Massage</h3>
                                <p>Deep tissue massage is often used in the process of recovering from injury or illness your body may
                                    experience unwanted aches and pains, your deep tissue massage program will be designed to work
                                    specifically on those areas to help relieve tension, restore mobility, and eliminate pain.</p>
                                <p>Leading an active life can often result in sudden muscular injuries, I have been trained to work
                                    closely with you to eliminate muscle pain, restore mobility as quickly as possible, and reduce the
                                    risk of permanent damage.</p>
                                For this service <a href="#">Book Now</a>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <h3 style="margin-top: 0px;">Therapeutic Massage</h3>
                                <p>Therapeutic massage is often used in the process of recovering from injury or illness your body may
                                    experience unwanted aches and pains, your deep tissue massage program will be designed to work
                                    specifically on those areas to help relieve tension, restore mobility, and eliminate pain.</p>
                                <p>Leading an active life can often result in sudden muscular injuries, as a professional massage
                                    therapist I have trained to work closely with you to eliminate muscle pain, restore mobility as
                                    quickly as possible, and reduce the risk of permanent damage.</p>
                                For this service <a href="#">Book Now</a>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="settings">
                                <h3 style="margin-top: 0px;">Relaxation Massage</h3>
                                <p>A more relaxed massage suitable for everyone. Known to reduce pain, soothe muscles, improve
                                    circulation whilst promoting health and well being.</p>

                                <p>Relaxation massage, often referred to as Swedish massage, uses a variety of techniques to help you
                                    unwind and rejuvenate. During a relaxation massage I will use pressure ranging from light to firm to
                                    promote relaxation, and ease muscle tension.</p>
                                For this service <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <img src="./Images/banner_1900x480_massage-01_img_24.jpg" class="img-responsive" alt="banner"
                         style="padding-top: 15px; margin-bottom: 15px; " />
                </a>
            </div>

            @endsection
