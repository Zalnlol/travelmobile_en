@extends('layoutUser.layoutstaticpage')
@section('titleweb', 'General principles')

@section('bodycode')
    <section class="body">
        <div class="body-container">
            <div class="sidebar">
                <div class="rent-car has-scroll">
                    <div class="scroll-inner">
                        <ul>
                            <br>
                            <br>
                            <br>

                            <li><a href="Term">Nguyên tắc chung</a></li>
                            <li><a class="active" aria-current="page" href="PolicieRegulation">Chính
                                    sách và quy định</a>
                                <ul>
                                    <li><a href="PolicieRegulation#responsibility">1. Trách nhiệm của
                                            khách thuê và chủ xe </a></li>
                                    <li><a href="PolicieRegulation#TraveMobile-responsibility">2. Trách
                                            nhiệm của TraveMobile khi có sự cố </a></li>
                                    <li><a href="PolicieRegulation#canceltrip">3. Chính sách huỷ
                                            chuyến</a></li>
                                    <li><a href="PolicieRegulation#price">4. Chính sách giá</a></li>
                                    <li><a href="PolicieRegulation#payment">5. Chính sách thanh toán
                                        </a></li>
                                    <li><a href="PolicieRegulation#transaction">6. Chính sách giao
                                            nhận</a></li>
                                    <li><a href="PolicieRegulation#quickcancel">7. Chính sách kết
                                            thúc sớm chuyến</a></li>
                                </ul>
                            </li>
                            <li><a href="AQ">Câu hỏi và trả lời</a>
                                <ul>
                                    <li><a href="AQ#traveler">Dành cho khách thuê xe</a>
                                    </li>
                                    <li><a href="AQ#owner">Dành cho chủ xe</a></li>
                                    <li><a href="AQ">Dành chung </a></li>
                                </ul>
                            </li>
                            <li><a href="Regu">Quy chế hoạt động</a></li>
                            <li><a href="Personalinfo">Bảo mật thông tin cá nhân</a></li>
                            <li><a href="Resolveconflic">Giải quyết khiếu nại</a></li>
                        </ul>
                        <div class="space m"></div>
                    </div>
                </div>
            </div>
            <div class="content">
                <br>
                <br>
                <br>
                
                <h2 class="title">Chính sách &amp; quy định</h2>
                <div class="content-container">
                    <h4 id="responsibility">1. Trách nhiệm của khách thuê xe và chủ xe trong giao dịch cho thuê
                        xe tự lái</h4>
                    <p> Mục đích lâu dài của TraveMobile là hướng đến việc xây dựng cộng đồng chia sẻ xe ô tô văn minh
                        và uy tín tại Việt Nam. Vì thế, để đảm bảo các giao dịch thuê xe trong cộng đồng được
                        diễn ra một cách thuận lợi và thành công tốt đẹp thì việc quy định trách nhiệm của các
                        bên trong tuân thủ các chính sách của TraveMobile và các điều khoản cam kết là rất quan trọng.
                    </p>
                    <h6>A. Trách nhiệm của chủ xe</h6>
                    <p>- Giao xe và toàn bộ giấy tờ liên quan đến xe đúng thời gian và trong tình trạng an toàn,
                        vệ sinh sạch sẽ nhằm đảm bảo chất lượng dịch vụ. </p>
                    <p>- Các giấy tờ xe liên quan bao gồm: giấy đăng ký xe (bản photo công chứng), giấy kiểm
                        định, giấy bảo hiểm xe (bản photo công chứng hoặc bản gốc).</p>
                    <p>- Chịu trách nhiệm pháp lý về nguồn gốc và quyền sở hữu của xe.</p>
                    <h6>B. Trách nhiệm khách thuê xe</h6>
                    <p>- Kiểm tra kỹ xe trước khi nhận và trước khi hoàn trả xe. Kí xác nhận biên bản bàn giao
                        về tình trạng xe khi nhận và khi hoàn trả.</p>
                    <p>- Thanh toán đầy đủ tiền thuê xe cho Chủ xe khi nhận xe.</p>
                    <p>- Xuất trình đầy đủ các giấy tờ liên quan cho chủ xe: CMND, GPLX, Hộ khẩu hoặc KT3. Đặt
                        cọc Hộ khẩu/KT3, tiền mặt (15 triệu đồng hoặc tùy thỏa thuận với chủ xe) hoặc tài sản có
                        giá trị tương đương (xe máy và cà vẹt xe) trước khi nhận xe.</p>
                    <p>- Tuân thủ quy định và thời gian trả xe như 2 bên đã thỏa thuận.</p>
                    <p>- Chịu trách nhiệm đền bù mọi thất thoát về phụ tùng, phụ kiện của xe, đền bù 100% theo
                        giá phụ tùng chính hãng nếu phát hiện phụ tùng bị tráo đổi, chịu 100% chi phí sửa chữa
                        xe nếu có xảy ra hỏng hóc tùy theo mức độ hư tổn của xe, chi phí các ngày xe nghỉ không
                        chạy được do lỗi của khách thuê xe (giá được tính bằng giá thuê trong hợp đồng) và các
                        khoản phí vệ sinh xe nếu có.</p>
                    <h6>C. Trách nhiệm và khuyến nghị của TraveMobile</h6>
                    <p>- TraveMobile khuyến nghị Chủ xe và Khách thuê xe cần thực hiện việc giao kết bằng văn bản "Hợp
                        đồng cho thuê xe tự lái" cũng như kí kết "Biên bản bàn giao xe" nhằm đảm bảo quyền lợi
                        của cả 2 bên trong trường hợp phát sinh tranh chấp.</p>
                    <p>- Chủ xe có thể tham khảo sử dụng mẫu "Hợp đồng thuê xe tự lái" và "Biên bản bàn giao xe"
                        của TraveMobile (vui lòng cung cấp email cho bộ phận CSKH của TraveMobile để nhận thông tin).</p>
                    <p>- Chủ xe và khách thuê xe tự chịu toàn bộ trách nhiệm dân sự và hình sự nếu có phát sinh
                        tranh chấp giữa hai bên nếu có. TraveMobile chỉ đóng vai trò hỗ trợ hai bên dàn xếp các vấn đề
                        một cách tốt đẹp nhất, tuân theo các điều khoản, chính sách và quy chế hoạt động cả hai
                        bên đã cam kết với TraveMobile.</p>
                    <div class="space l"></div>
                    <h4 id="TraveMobile-responsibility">2. Trách nhiệm của TraveMobile trong các trường hợp xảy ra sự cố
                        ngoài ý muốn như xe bị cầm cố, thế chấp, bị bắt giữ khi được dùng để vận chuyển ma túy,
                        hàng quốc cấm, hoặc gây tai nạn</h4>
                    <p>Hiện tại, TraveMobile chỉ đóng vai trò là sàn giao dịch thương mại điện tử về cho thuê xe ô tô,
                        là cầu nối giữa các chủ xe và khách hàng có nhu cầu thuê xe. Về cơ bản, mọi thủ tục và
                        toàn bộ các vấn đề phát sinh liên quan đến giao dịch cho thuê xe giữa chủ xe và khách
                        thuê sẽ do hai bên tự thỏa thuận, kí hợp đồng và chịu trách nhiệm với nhau.</p>
                    <p>Trong trường hợp có xảy ra sự cố ngoài ý muốn như xe bị cầm cố, thế chấp, bị bắt khi được
                        dùng để vận chuyển ma túy, hàng quốc cấm hoặc gây ra tai nạn, TraveMobile sẽ cố gắng hỗ trợ
                        tốt nhất các chủ xe trong khả năng của mình, giới hạn ở việc hướng dẫn chủ xe các thủ
                        tục cần thiết để trình báo với cơ quan công an và các cơ quan có thẩm quyền, cung cấp
                        các thông tin nếu có liên quan đến thành viên thuê xe hoặc các thông tin khác nếu có yêu
                        cầu từ cơ quan chức năng, và tiến hành khóa vĩnh viễn tài khoản thành viên vi phạm.</p>
                    <p>Để bảo vệ tốt nhất tài sản của mình và giảm thiểu tối đa các rủi ro có thể xảy ra, các
                        chủ xe cần ràng buộc chặt chẽ về mặt pháp lí bằng việc giao kết bằng văn bản "Hợp đồng
                        cho thuê xe tự lái", "Biên bản bàn giao xe" (có thể tham khảo sử dụng mẫu hợp đồng và
                        biên bản bàn giao do TraveMobile đề xuất hoặc có thể sử dụng mẫu riêng của nhà xe), xác minh
                        đầy đủ thông tin và các giấy tờ cá nhân của khách thuê, giữ lại tài sản đặt cọc và các
                        giấy tờ cần thiết (và tuyệt đối không giao cà vẹt xe bản chính cho khách thuê). Các chủ
                        xe cũng cần trang bị cho xe thiết bị định vị GPS để có thể theo dõi và kiểm tra vị trí
                        xe thường xuyên nhằm có các phương án xử lí kịp thời. </p>
                    <p>Thời gian tới, nhằm bảo vệ một cách toàn diện nhất quyền lợi của các chủ xe cũng như
                        khách thuê, TraveMobile đang xúc tiến làm việc với các đối tác bảo hiểm để triển khai các sản
                        phẩm bảo hiểm đối với dịch vụ thuê xe tự lái theo ngày, áp dụng cho tất cả các giao dịch
                        cho thuê được thực hiện thông qua ứng dụng TraveMobile. </p>
                    <p>TraveMobile hy vọng sẽ sớm hoàn thiện và triển khai gói giải pháp này trong thời gian sớm nhất.
                    </p>
                    <div class="space l"></div>
                    <h4 id="canceltrip">3. Chính sách hủy chuyến</h4>
                    <h6 id="#rentercanceltrip"><b>A. Dành cho khách thuê xe</b></h6>
                    <p>Bạn là khách thuê xe, sau khi đã đặt cọc và đặt xe thành công, bạn có thể hủy chuyến đi
                        đã đặt bằng cách gửi “Yêu cầu hủy chuyến” thông qua trang web TraveMobile.vn hoặc ứng dụng
                        TraveMobile, và lựa chọn lý do hủy chuyến.</p>
                    <p>Nếu thật sự muốn hủy chuyến, bạn nên lưu ý thực hiện việc này càng sớm càng tốt vì TraveMobile
                        sẽ tiến hành hoàn trả số tiền đặt cọc cho bạn tùy thuộc vào thời điểm bạn gửi yêu cầu
                        hủy chuyến. Số tiền đặt cọc TraveMobile sẽ hoàn trả cho bạn được tính như sau</p>
                    <table>
                        <thead>
                            <tr>
                                <td>Thời điểm hủy chuyến</td>
                                <td>Phí hủy chuyến</td>
                                <td>Số tiền cọc hoàn trả</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Trong vòng 1 giờ sau khi đặt cọc</td>
                                <td>0% Tiền cọc</td>
                                <td>100% Tiền cọc</td>
                            </tr>
                            <tr>
                                <td>&gt; 7 ngày trước khởi hành</td>
                                <td>30% Tiền cọc</td>
                                <td>70% Tiền cọc</td>
                            </tr>
                            <tr>
                                <td>&lt;= 7 ngày trước khởi hành</td>
                                <td>100% Tiền cọc</td>
                                <td>0% Tiền cọc</td>
                            </tr>
                            <tr>
                                <td colspan="3">*** Trường hợp phát sinh <span class="fontWeight-5">Phí hủy
                                        chuyến</span>, TraveMobile sẽ trừ vào tiền đặt cọc của Quý khách hàng và sẽ
                                    thanh toán lại khoản tiền này cho Đối tác chủ xe (và ngược lại, trường hợp
                                    Đối tác chủ xe hủy chuyến được đến phát sinh Phí hủy chuyến, TraveMobile sẽ hoàn
                                    trả lại 100% tiền cọc và tiền phí hủy chuyến được đền bù cho Quý khách trong
                                    1 - 3 ngày làm việc).</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="space l"></div>
                    <p>Những khách thuê xe thực hiện hủy chuyến nhiều lần sẽ bị tạm khóa tài khoản thành viên
                        trên ứng dụng TraveMobile.</p>
                    <h6 id="ownercanceltrip">B. Dành cho Chủ xe</h6>
                    <p>Nếu bạn là chủ xe, trong trường hợp bạn muốn hủy chuyến sau khi khách hàng đã đặt xe
                        thành công, bạn có thể thực hiện thao tác hủy chuyến trên ứng dụng TraveMobile.</p>
                    <p>Nhằm gia tăng sự cam kết của chủ xe cũng như đảm bảo quyền lợi của khách thuê, trường hợp
                        chủ xe hủy chuyến (vì lí do không giao đúng xe / không giao xe đúng thời gian), nếu như
                        không thỏa thuận được hoặc không có sự đồng ý từ phía khách thuê, thì chủ xe phải bồi
                        thường phí hủy chuyến cho khách thuê số tiền bằng đúng số tiền mà khách thuê đã đặt cọc
                        thông qua Công ty Cổ phần TraveMobile Việt Nam.</p>
                    <table>
                        <thead>
                            <tr>
                                <td>Thời điểm hủy chuyến</td>
                                <td>Phí hủy chuyến</td>
                                <td>Đánh giá hệ thống</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Trong vòng 1 giờ sau khi đặt cọc</td>
                                <td>0% Tiền cọc</td>
                                <td>3*</td>
                            </tr>
                            <tr>
                                <td>&gt; 7 ngày trước khởi hành</td>
                                <td>30% Tiền cọc</td>
                                <td>3*</td>
                            </tr>
                            <tr>
                                <td>&lt;= 7 ngày trước khởi hành</td>
                                <td>100% Tiền cọc</td>
                                <td>2* (hoặc 1* nếu &lt;6 tiếng)</td>
                            </tr>
                            <tr>
                                <td colspan="3">*** Trường hợp phát sinh <span class="fontWeight-5">Phí hủy
                                        chuyến</span>, TraveMobile sẽ trừ vào tài khoản của Quý đối tác và sẽ thanh
                                    toán lại khoản tiền này cho khách hàng (và ngược lại, trường hợp khách hàng
                                    hủy chuyến dẫn đến phát sinh Phí hủy chuyến, TraveMobile sẽ cộng tiền phí vào tài
                                    khoản Quý đối tác).</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="space l"></div>
                    <p>Phí hủy chuyến sẽ được trừ vào tài khoản của bạn trên TraveMobile. Trong trường hợp số dư tài
                        khoản của bạn nhỏ hơn số tiền phí hủy chuyến, phần chênh lệch sẽ được ghi âm vào tài
                        khoản và sẽ cấn trừ vào thu nhập của bạn cho các chuyến xe tiếp theo.</p>
                    <p>Bên cạnh việc chịu phí, các chủ xe thực hiện hủy chuyến nhiều lần sẽ bị tạm khóa tài
                        khoản thành viên trên ứng dụng TraveMobile.</p>
                    <p>Bộ phận CSKH của TraveMobile sẽ liên hệ với khách thuê xe thông báo về tình hình chuyến đi bị
                        hủy, và tiến hành hoàn trả lại 100% tiền cọc và tiền phí hủy chuyến được đền bù (nếu có)
                        cho khách thuê.</p>
                    <div class="space l"></div>
                    <h4 id="price">4. Chính sách giá</h4>
                    <h6 id="renterprice">A. Dành cho khách thuê xe</h6>
                    <p>Trên ứng dụng TraveMobile, mỗi dòng xe sẽ được cho thuê tại các mức giá khác nhau tùy thuộc vào
                        sự quyết định của các chủ xe và được niêm yết công khai.</p>
                    <p>Về cơ bản, cơ cấu giá của một chuyến đi được tính bao gồm các thành phần:</p>
                    <p>- Đơn giá thuê: Là giá thuê niêm yết bởi chủ xe mà bạn dễ dàng nhìn thấy trong phần thông
                        tin xe. Giá thuê trên TraveMobile được tính theo đơn vị nhỏ nhất là ngày. Chủ xe có thể điều
                        chỉnh giá thuê khác nhau cho từng ngày, chính vì vậy, chi phí thuê xe của bạn có thể
                        tăng hoặc giảm tùy vào thời điểm bạn thuê xe. Thông thường, giá thuê sẽ cao hơn trong
                        dịp cuối tuần và các ngày lễ, tết.</p>
                    <p>- Chiết khấu: một số chủ xe có chính sách chiết khấu cho các chuyến xe kéo dài 1 tuần
                        hoặc 1 tháng (mức chiết khấu bình quân từ 5-20% tùy vào quyết định của chủ xe). Vì thế,
                        nếu bạn có nhu cầu thuê xe du lịch hay công tác dài ngày, hãy ưu tiên lựa chọn các chủ
                        xe này để có được mức giá tốt hơn.</p>
                    <p>- Chi phí vận chuyển: nếu bạn không có nhiều thời gian để đến trực tiếp địa diểm của chủ
                        xe để nhận xe, bạn có thể lựa chọn các chủ xe có cung cấp thêm dịch vụ giao xe tận nơi.
                        Chi phí giao nhận xe bình quân từ 5,000-15,000VND/km tùy vào quyết định của chủ xe được
                        thể hiện tại phần thông tin xe và sẽ được cộng vào chi phí thuê xe của bạn.</p>
                    <p>- Mã khuyến mãi: là mã giảm giá mà TraveMobile gửi tặng đến các thành viên của mình cho trong
                        các đợt khuyến mãi, hoặc dành cho các thành viên thân thiết giao dịch thường xuyên trên
                        ứng dụng TraveMobile. Mã khuyến mãi này sẽ được trừ trực tiếp vào chi phí thuê xe của bạn.</p>
                    <p>Bảng tóm tắt:</p>
                    <table>
                        <tr>
                            <td>Phí thuê xe = Đơn giá thuê ngày * Số ngày (Giá các ngày có thể thay đổi)</td>
                        </tr>
                        <tr>
                            <td>Chiết khấu = % Chiết khấu * Phí thuê xe</td>
                        </tr>
                        <tr>
                            <td>Phí vận chuyển = Đơn giá vận chuyển * Số km</td>
                        </tr>
                        <tr>
                            <td>Khuyến mãi = % Khuyến mãi x (Phí thuê xe – Chiết khấu + Phí vận chuyển)</td>
                        </tr>
                        <tr>
                            <td>Tổng chi phí chuyến đi = Phí thuê xe - Chiết khấu + Phí vận chuyển + Phí dịch vụ
                                - Khuyến mãi.</td>
                        </tr>
                    </table>
                    <div class="space l"></div>
                    <h6 id="ownerprice">B. Dành cho Chủ xe</h6>
                    <p>Các chủ xe của TraveMobile được quyền thiết lập giá thuê xe hàng ngày cho tháng hiện hành và
                        tối đa 3 tháng kế tiếp. Bạn có thể sử dụng giá đề xuất của TraveMobile hoặc có thể tùy chỉnh
                        giá cho thuê theo mong muốn của bạn.</p>
                    <p>- Giá đề xuất của TraveMobile: được định vị thấp hơn 10% so với giá thuê xe bình quân trên thị
                        trường. Mức giá này được tiến hành khảo sát hàng tháng bởi bộ phận phát triển thị trường
                        của TraveMobile đối với từng dòng xe khác nhau.</p>
                    <div class="space l"></div>
                    <h4 id="payment">5. Chính sách thanh toán</h4>
                    <p>Sau khi nhận được sự đồng ý cho thuê xe từ phía chủ xe, tại bước cuối cùng, bạn cần phải
                        đặt cọc trước cho TraveMobile 30% tổng chi phí chuyến đi. Bạn có thể chọn lựa hình thức thanh
                        toán chuyển khoản qua ngân hàng trực tuyến hoặc sử dụng thẻ Visa.</p>
                    <p>Phần còn lại 70% bạn có thể thanh toán trực tiếp cho chủ xe ngay khi nhận được xe.</p>
                    <div class="space l"></div>
                    <h4 id="transaction">6. Chính sách thời gian giao nhận</h4>
                    <p>Thời gian thuê xe mặc định trong hệ thống được thiết lập từ 9h tối đến 8h tối ngày kế
                        tiếp. Tuy nhiên, khách hàng cũng có thể tùy chỉnh lựa chọn thời gian thuê xe theo nhu
                        cầu của mình, trong vòng 24 tiếng sẽ được tính 1 ngày.</p>
                    <div class="space l"></div>
                    <h4 id="quickcancel">7. Chính sách kết thúc sớm chuyến đi</h4>
                    <p>Trong trường hợp bạn muốn kết thúc sớm chuyến đi của mình khi vẫn chưa đến thời hạn trả
                        xe, để có thể được hoàn lại tiền cho các ngày chưa sử dụng, bạn nên trao đổi trước với
                        chủ xe và cần phải nhận được sự đồng ý từ phía chủ xe. Số tiền được hoàn lại sẽ do bạn
                        và chủ xe tự thỏa thuận với nhau. Lưu ý rằng, bạn sẽ không được hoàn lại số tiền bạn đã
                        đặt cọc cho TraveMobile.</p>
                    <div class="space l"></div>
                </div>
            </div>
        </div>
    </section>

@endsection
