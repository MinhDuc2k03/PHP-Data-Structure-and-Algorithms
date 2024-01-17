# PHP Data Structure and Algorithms
 - Hackerrank: https://www.hackerrank.com/profile/mducm2013




## Data Structure (Cấu trúc dữ liệu)


### Khái niệm
Cấu trúc dữ liệu là cách lập trình để lưu trữ dữ liệu để nó có thể được sử dụng một cách hiệu quả. Hầu hết mọi ứng dụng doanh nghiệp đều sử dụng nhiều kiểu cấu trúc dữ liệu khác nhau theo cách này hay cách khác, bởi vì nó mang lại nhiều lợi ích rất lớn không chỉ cho việc lưu trữ dữ liệu.

Cấu trúc dữ liệu cung cấp các phương thức và thuật toán để thao tác, truy xuất, chèn, xóa và sắp xếp dữ liệu. Cấu trúc dữ liệu giúp tăng tính hiệu quả và hiệu suất khi làm việc với dữ liệu trong các ứng dụng máy tính.


### Đặc tính của cấu trúc dữ liệu là gì?
Cấu trúc dữ liệu thường được phân loại theo đặc tính của chúng. Sau đây là ba đặc tính được dùng để phân loại cấu trúc dữ liệu:

 - **Tuyến tính hoặc phi tuyến tính:** Đặc tính này mô tả liệu các mục dữ liệu được sắp xếp theo thứ tự hay không.

 - **Đồng nhất hoặc không đồng nhất:** Đặc tính này mô tả liệu tất cả các mục dữ liệu trong một kho lưu trữ nhất định có cùng loại hay không.

 - **Tĩnh hoặc động:** Đặc tính này mô tả cách các cấu trúc dữ liệu được biên dịch. Cấu trúc dữ liệu tĩnh có kích thước, cấu trúc và vị trí bộ nhớ cố định tại thời điểm biên dịch. Cấu trúc dữ liệu động có kích thước, cấu trúc và vị trí bộ nhớ có thể thu nhỏ hoặc mở rộng, tùy thuộc vào việc sử dụng.


### Khi nào cần dùng cấu trúc dữ liệu:

 - **Tìm kiếm dữ liệu:** Tìm kiếm một sản phần nào đó trong hàng tỉ tỉ dữ liệu ngày càng tăng lên dần. Khi dữ liệu phát triển, tìm kiếm sẽ trở nên chậm hơn.
 - **Tốc độ bộ xử lý:** Tốc độ bộ xử lý mặc dù rất cao nhưng sẽ bị giới hạn nếu dữ liệu tăng lên đến hàng tỷ bản ghi dữ liệu.
 - **Nhiều yêu cầu:** Vì hàng nghìn người dùng có thể tìm kiếm dữ liệu đồng thời trên một máy chủ web, ngay cả máy chủ nhanh cũng bị lỗi trong khi tìm kiếm dữ liệu.



### Các hoạt động phổ biến trên cấu trúc dữ liệu:

 - **Tìm kiếm:** Ta có thể tìm kiếm các phần tử.
 
 - **Sắp sếp:** Thực hiện sắp sếp phần tử theo thứ tự tăng hoặc giảm dần.

 - **Chèn:** Có thể chèn thêm các phần tử mới vào cấu trúc dữ liệu.

 - **Cập nhập:** Có thể thay thế hoặc cập nhập một phần tử nào đó trong cấu trúc dữ liệu bằng một phần tử khác.

 - **Xóa:** Có thể thực hiện lệnh xóa để loại bỏ phần tử.


### Thuật ngữ cơ bản trong Cấu trúc dữ liệu:

 - **Dữ liệu (Data):** Dữ liệu là các giá trị hoặc là tập hợp các giá trị.

 - **Phần tử dữ liệu (Data Item):** Phần tử dữ liệu là một đơn vị đơn lẻ của giá trị.

 - **Các phần tử nhóm (Group Items):** Phần tử dữ liệu mà được chia thành các phần tử con thì được gọi là các phần tử nhóm.

 - **Các phần tử cơ bản (Elementary Items):** Phần tử dữ liệu mà không thể bị chia nhỏ thành các phần tử con thì gọi là các phần tử cơ bản.

 - **Thuộc tính và Thực thể (Attribute and Entity):** Một thực thể là cái mà chứa một vài thuộc tính nào đó, và các thuộc tính này có thể được gán các giá trị.

 - **Tập hợp thực thể (Entity Set):** Các thực thể mà có các thuộc tính tương tự nhau thì cấu thành một tập hợp thực thể.

 - **Trường (Field):** Trường là một đơn vị thông tin cơ bản biểu diễn một thuộc tính của một thực thể.

 - **Bản ghi (Record):** Bản ghi là một tập hợp các giá trị trường của một thực thể đã cho.

 - **Tệp (File):** Là một tập hợp các bản ghi của các thực thể trong một tập hợp thực thể đã cho.


### Các loại cấu trúc dữ liệu
Cấu trúc dữ liệu có thể được chia thành hai loại chính:

 - Cấu trúc dữ liệu tuyến tính (Linear Data Structure)

 - Cấu trúc dữ liệu phi tuyến tính (Non-linear Data Structure)


#### Linear Data Structure
Một cấu trúc dữ liệu được cho là tuyến tính nếu các phần tử của nó kết hợp để tạo thành bất kỳ thứ tự cụ thể nào. Có hai kỹ thuật để biểu diễn cấu trúc tuyến tính như vậy trong bộ nhớ.

 - Cách đầu tiên là cung cấp mối quan hệ tuyến tính giữa tất cả các phần tử được biểu diễn bằng vị trí bộ nhớ tuyến tính. Những cấu trúc tuyến tính này được gọi là mảng.

 - Kỹ thuật thứ hai cung cấp mối quan hệ tuyến tính giữa tất cả các phần tử được biểu diễn bằng khái niệm con trỏ hoặc liên kết. Những cấu trúc tuyến tính này được gọi là danh sách liên kết.

Các ví dụ điển hình của cấu trúc dữ liệu tuyến tính là:

 - Arrays (Mảng)

 - Queues (Hàng đợi)

 - Stacks (ngăn xếp)

 - Linked lists (Danh sách liên kết)

**Arrays:** Mảng là một tập hợp các biến có kích thước cố định được sắp xếp theo cùng một kiểu dữ liệu. Mảng có các vị trí bộ nhớ liền kề để lưu trữ giá trị.
![](https://media.geeksforgeeks.org/wp-content/cdn-uploads/20230726162247/Array-data-structure.png)


**Queues:** Hàng đợi là một cấu trúc dữ liệu trừu tượng. **Đặc điểm của hàng đợi là FIFO (first in first out) - có nghĩa là vào trước ra trước**. Đặt tên là hàng đợi bởi vì nó là một cái gì đó tương tự như hàng đợi trong đời sống hàng ngày (xếp hàng).
![](https://media.geeksforgeeks.org/wp-content/cdn-uploads/20230726165642/Queue-Data-structure1.png)

**Stacks:** Ngăn xếp là một cấu trúc dữ liệu tuyến tính tuân theo một thứ tự cụ thể trong đó các hoạt động được thực hiện. Thứ tự có thể là **LIFO(Last In First Out)** hoặc **FILO(First In Last Out)**. LIFO ngụ ý rằng phần tử được chèn cuối cùng sẽ xuất hiện trước và FILO ngụ ý rằng phần tử được chèn trước sẽ xuất hiện sau cùng.
![](https://media.geeksforgeeks.org/wp-content/cdn-uploads/20230726165552/Stack-Data-Structure.png)

**Linked Lists:** Danh sách liên kết là cấu trúc dữ liệu tuyến tính, trong đó các phần tử không được lưu trữ ở các vị trí bộ nhớ liền kề. Các phần tử trong danh sách liên kết được liên kết bằng cách sử dụng con trỏ như trong hình bên dưới:
![](https://media.geeksforgeeks.org/wp-content/cdn-uploads/20230726162542/Linked-List-Data-Structure.png)


#### Non-linear Data Structure
Cấu trúc này chủ yếu biểu diễn dữ liệu với mối quan hệ phân cấp giữa các phần tử khác nhau.

Ví dụ về Cấu trúc dữ liệu phi tuyến tính được liệt kê dưới đây:

 - Graphs (Đồ thị)

 - Family of trees (Họ cây)

 - Table of contents (Mục lục)

**Graphs:** Đồ thị là một cấu trúc dữ liệu phi tuyến tính bao gồm các đỉnh và các cạnh. Các đỉnh đôi khi còn được gọi là các điểm giao và các cạnh là các đường hoặc cung nối hai điểm giao bất kỳ trong biểu đồ. Chính thức hơn, Đồ thị bao gồm một tập hợp các đỉnh (vertices ( V )) và một tập hợp các cạnh (edges ( E )). Đồ thị được ký hiệu là G(E, V).
![](https://media.geeksforgeeks.org/wp-content/uploads/20200630111809/graph18.jpg)

Các thành phần của đồ thị:
 - Vertices: Các đỉnh là đơn vị cơ bản của đồ thị. Đôi khi, các đỉnh còn được gọi là đỉnh hoặc điểm giao. Mỗi điểm giao/đỉnh có thể được gắn nhãn hoặc không được gắn nhãn.

 - Edges: Các cạnh được vẽ hoặc dùng để nối hai điểm giao của đồ thị. Nó có thể được sắp xếp theo cặp điểm giao trong đồ thị có hướng. Các cạnh có thể kết nối hai điểm giao bất kỳ theo bất kỳ cách nào có thể. Không có quy định. Đôi khi, các cạnh còn được gọi là cung. Mỗi cạnh có thể được dán nhãn/không ghi nhãn.

**Family of trees:** Cấu trúc dữ liệu cây là cấu trúc phân cấp được sử dụng để biểu diễn và sắp xếp dữ liệu theo cách dễ dàng điều hướng và tìm kiếm. Nó là tập hợp các điểm giao được kết nối bằng các cạnh và có mối quan hệ phân cấp giữa các điểm giao.

điểm giao trên cùng của cây được gọi là điểm giao gốc, các điểm giao bên dưới gọi là điểm giao con. Mỗi điểm giao có thể có nhiều điểm giao con và các điểm giao con này cũng có thể có các điểm giao con riêng, tạo thành cấu trúc đệ quy.
![](https://media.geeksforgeeks.org/wp-content/uploads/20221124153129/Treedatastructure.png)


Các thuật ngữ cơ bản trong cấu trúc dữ liệu cây:

 - **Điểm giao cha:** Điểm giao tiền thân của điểm giao được gọi là điểm giao cha của điểm giao đó. {B} là điểm giao cha của {D, E}.

 - **Điểm giao con:** Điểm giao kế thừa trực tiếp của điểm giao được gọi là điểm giao con của điểm giao đó. Ví dụ: {D, E} là các điểm giao con của {B}.

 - **Điểm giao gốc:** Điểm giao trên cùng của cây hoặc điểm giao không có điểm giao cha nào được gọi là điểm giao gốc. {A} là điểm giao gốc của cây. Cây không trống phải chứa chính xác một điểm giao gốc và chính xác một đường dẫn từ gốc đến tất cả các điểm giao khác của cây.

 - **Điểm giao lá hoặc Điểm giao ngoài:** Các điểm giao không có điểm giao con nào được gọi là điểm giao lá. {K, L, M, N, O, P, G} là các điểm giao lá của cây.
 
 - **Tổ tiên của điểm giao:** Bất kỳ điểm giao tiền thân nào trên đường dẫn gốc tới điểm giao đó đều được gọi là Tổ tiên của điểm giao đó. {A,B} là các điểm giao tổ tiên của điểm giao {E}
 
 - **Hậu duệ:** Bất kỳ điểm giao kế thừa nào trên đường đi từ điểm giao lá đến điểm giao đó. {E,I} là hậu duệ của điểm giao {B}.
 
 - **Anh chị em:** Con của cùng một điểm giao cha được gọi là anh chị em. {D,E} được gọi là anh chị em.
 
 - **Cấp độ của một điểm giao:** Số cạnh trên đường dẫn từ điểm giao gốc đến điểm giao đó. điểm giao gốc có cấp độ 0.
 
 - **Điểm giao nội bộ:** Một điểm giao có ít nhất một điểm giao con được gọi là điểm giao nội bộ.
 
 - **Hàng xóm của một điểm giao:** Các điểm giao cha hoặc điểm giao con của điểm giao đó được gọi là hàng xóm của điểm giao đó.
 
 - **Cây con:** Bất kỳ điểm giao nào của cây cùng với con cháu của nó.


## Algorithms (Thuật toán)


### Khái niệm
Thuật toán là một chuỗi các hướng dẫn mà máy tính phải thực hiện để giải quyết một vấn đề được xác định rõ ràng. Về cơ bản nó xác định những gì máy tính cần làm và cách thực hiện. Các thuật toán có thể hướng dẫn máy tính cách thực hiện phép tính, xử lý dữ liệu hoặc đưa ra quyết định.

Cách tốt nhất để hiểu một thuật toán là coi nó như một công thức hướng dẫn bạn thực hiện một loạt các hành động được xác định rõ ràng để đạt được một mục tiêu cụ thể. Giống như một công thức tạo ra kết quả có thể nhân rộng, các thuật toán đảm bảo kết quả nhất quán và đáng tin cậy cho nhiều nhiệm vụ trong lĩnh vực kỹ thuật số.


### Đặc tính của thuật toán là gì?
Thuật toán có những tính chất bao gồm:

 - **Dữ liệu đầu vào:** Giải thuật nên có 0 hay nhiều hơn 1 đầu vào xác định

 - **Dữ liệu đầu ra:** Một giải thuật nên có 1 hoặc nhiều dữ liệu đầu ra đã xác định, nên kết nối với kiểu dữ liệu đầu ra mong muốn.

 - **Tính dừng:** Sau một số hữu hạn bước thuật toán phải dừng.

 - **Tính xác định:** Ở mỗi bước, các bước thao tác phải hết sức rõ ràng, không gây nên sự nhập nhằng. Nói rõ hơn, trong cùng một điều kiện hai bộ xử lý cùng thực hiện một bước của thuật toán phải cho những kết quả như nhau.

 - **Tính đúng đắn (hiệu quả):** Trước hết thuật toán cần đúng đắn, nghĩa là sau khi đưa dữ liệu vào thuật toán hoạt động và đưa ra kết quả như ý muốn.

 - **Tính phổ dụng:** Thuật toán có thể giải bất kỳ một bài toán nào trong lớp các bài toán. Cụ thể là thuật toán có thể có các đầu vào là các bộ dữ liệu khác nhau trong một miền xác định.


### Các loại thuật toán
Có một số loại thuật toán, tất cả đều được thiết kế để thực hiện các nhiệm vụ khác nhau:

 - **Thuật toán công cụ tìm kiếm (Search engine algorithm):** Thuật toán này lấy chuỗi tìm kiếm gồm từ khóa và toán tử làm đầu vào, tìm kiếm cơ sở dữ liệu liên quan của nó để tìm các trang web có liên quan và trả về kết quả.

 - **Thuật toán mã hóa (Encryption algorithm):** Thuật toán điện toán này biến đổi dữ liệu theo các hành động được chỉ định để bảo vệ dữ liệu. Ví dụ: một thuật toán khóa đối xứng, chẳng hạn như Tiêu chuẩn mã hóa dữ liệu, sử dụng cùng một khóa để mã hóa và giải mã dữ liệu. Nếu thuật toán đủ phức tạp thì không ai thiếu khóa có thể giải mã được dữ liệu.

 - **Thuật toán tham lam (Greedy algorithm):** Thuật toán này giải quyết các vấn đề tối ưu hóa bằng cách tìm giải pháp tối ưu cục bộ, hy vọng đó là giải pháp tối ưu ở cấp độ toàn cầu. Tuy nhiên, nó không đảm bảo giải pháp tối ưu nhất.

 - **Thuật toán đệ quy (Recursive algorithm):** Thuật toán này gọi chính nó nhiều lần cho đến khi giải quyết được vấn đề. Các thuật toán đệ quy tự gọi mình với giá trị nhỏ hơn mỗi khi hàm đệ quy được gọi.

 - **Thuật toán quay lui (Backtracking algorithm):** Thuật toán này tìm ra giải pháp cho một vấn đề nhất định theo cách tiếp cận gia tăng và giải quyết từng phần một.

 - **Thuật toán chia-để-trị (Divide-and-conquer algorithm):** Thuật toán chung này được chia thành hai phần. Một phần chia một vấn đề thành các vấn đề con nhỏ hơn. Phần thứ hai giải quyết những vấn đề này và sau đó kết hợp chúng để tạo ra giải pháp.

 - **Thuật toán lập trình động (Dynamic programming algorithm):** Thuật toán này giải quyết vấn đề bằng cách chia chúng thành các vấn đề con. Các kết quả sau đó được lưu trữ để áp dụng cho các bài toán tương ứng trong tương lai.

 - **Thuật toán vét cạn (Brute-force algorithm):** Thuật toán này lặp lại tất cả các giải pháp có thể cho một vấn đề một cách mù quáng, tìm kiếm một hoặc nhiều giải pháp cho một hàm.

 - **Thuật toán sắp xếp (Sorting algorithm):** Các thuật toán sắp xếp được sử dụng để sắp xếp lại cấu trúc dữ liệu dựa trên toán tử so sánh, được sử dụng để quyết định thứ tự mới cho dữ liệu.

 - **Thuật toán băm (Hashing algorithm):** Thuật toán này lấy dữ liệu và chuyển đổi nó thành một thông báo thống nhất bằng hàm băm.

 - **Thuật toán ngẫu nhiên (Randomized algorithm):** Thuật toán này làm giảm thời gian chạy và độ phức tạp dựa trên thời gian. Nó sử dụng các yếu tố ngẫu nhiên như một phần logic của nó.

 ![](https://cdn.ttgtmedia.com/rms/onlineimages/types_of_algorithms-f.png)