<div class="booking-wrapper">
    <div class="container">
        <div class="booking-inner clearfix">
            <form action="{{ url('free_rooms') }}" class="form1 clearfix">
                <div class="col1 c1">
                    <div class="input1_wrapper">
                        <label>Check in</label>
                        <div class="input1_inner">
                            <input type="text" class="form-control input datepicker" placeholder="Check in" required>
                        </div>
                    </div>
                </div>
                <div class="col1 c2">
                    <div class="input1_wrapper">
                        <label>Check out</label>
                        <div class="input1_inner">
                            <input type="text" class="form-control input datepicker" placeholder="Check out" required>
                        </div>
                    </div>
                </div>
                <div class="col2 c3">
                    <div class="select1_wrapper">
                        <label>Adults</label>
                        <div class="select1_inner">
                            <select class="select2 select" style="width: 100%" required>
                                <option value="1">1 Adult</option>
                                <option value="2">2 Adults</option>
                                <option value="3">3 Adults</option>
                                <option value="4">4 Adults</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col2 c4">
                    <div class="select1_wrapper">
                        <label>Children</label>
                        <div class="select1_inner">
                            <select class="select2 select" style="width: 100%" required>
                                <option value="1">Children</option>
                                <option value="1">1 Child</option>
                                <option value="2">2 Children</option>
                                <option value="3">3 Children</option>
                                <option value="4">4 Children</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col2 c5">
                    <div class="select1_wrapper">
                        <label>Rooms</label>
                        <div class="select1_inner">
                            <select class="select2 select" style="width: 100%" required>
                                <option value="1">1 Room</option>
                                <option value="2">2 Rooms</option>
                                <option value="3">3 Rooms</option>
                                <option value="4">4 Rooms</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col3 c6">
                    <button type="submit" class="btn-form1-submit">Check Now</button>
                </div>
            </form>
        </div>
    </div>
</div>
