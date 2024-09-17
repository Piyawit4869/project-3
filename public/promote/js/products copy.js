const products = [
    {
      id: "1",
      category: ["ชา"],
      image: "{{ asset('promote/img/ชาไทย.jpg') }}",
      name: "ชาไทย",
      price: "60 บาท",
      description:
        "สัมผัสเสน่ห์แห่งรสชาติไทยแท้กับชาไทยหอมเข้ม ที่ผสานความหวานมันและความหอมกรุ่นของชาอย่างลงตัว ดื่มด่ำกับกลิ่นอายแบบดั้งเดิมที่มาพร้อมความสดชื่นในทุกคำ",
    },
    {
      id: "2",
      category: ["ลาเต้"],
      image: "{{ asset('promote/img/กุหลาบลาเต้.jpg') }}",
      name: "กุหลาบลาเต้",
      price: "60 บาท",
      description:
        "เครื่องดื่มที่มีการผสมผสานระหว่างรสชาติของนมกับความหอมหวานของดอกกุหลาบ",
    },
    {
      id: "3",
      category: ["ลาเต้"],
      image: "{{ asset('promote/img/โกโก้ลาเต้.jpg') }}",
      name: "โกโก้ลาเต้",
      price: "60 บาท",
      description:
        "สัมผัสความเข้มข้นที่หอมหวานไปกับโกโก้ที่ชวนหลงใหล ทุกอึกคือการเดินทางเข้าสู่โลกของช็อกโกแลตแท้ๆ ที่คัดสรรมาอย่างพิถีพิถัน ดื่มด่ำความอร่อยที่ทั้งนุ่มละมุนและอัดแน่นด้วยรสชาติเข้มข้น",
    },
    {
      id: "4",
      category: ["ชา"],
      image: "{{ asset('promote/img/ชาเขียวมัทฉะชิอาวาเสะ.jpg') }}",
      name: "ชาเขียวมัทฉะชิอาวาเสะ",
      price: "60 บาท",
      description:
        "เติมพลังความสดชื่นด้วยชาเขียวมัทฉะชิอาวาเสะ รสชาติเข้มข้นที่กลมกล่อมอย่างลงตัว มัทฉะแท้ที่คัดสรรจากใบชาเกรดพรีเมียม ผสมผสานด้วยสูตรลับเฉพาะ",
    },
    {
      id: "5",
      category: ["มีความสุข"],
      image: "{{ asset('promote/img/ชานมมีความสุข.jpg') }}",
      name: "ชานมมีความสุข",
      price: "60 บาท",
      description:
        "หลงใหลในความหวานหอมของชานมบราวชูการ์ ที่ทุกแก้วเต็มไปด้วยความอร่อยเข้มข้นของชานมนุ่มละมุน ผสานกับความหวานมันจากน้ำตาลทรายแดงคาราเมลเข้มข้นที่ลงตัวจนคุณต้องติดใจ",
    },
    {
  id: "6",
  category: ["ผลไม้"],
  image: "{{ asset('promote/img/ชาผลไม้รวม.jpg') }}",
  name: "ชาผลไม้รวม",
  price: "60 บาท",
  description:
    "ปลุกความสดใสให้วันของคุณด้วยชาผลไม้รวม ที่รวมความอร่อยจากผลไม้หลากหลายชนิดในแก้วเดียว หอมหวานอมเปรี้ยวอย่างลงตัว",
},
{
  id: "7",
  category: ["ผลไม้"],
  image: "{{ asset('promote/img/ชาลูกพีช.jpg') }}",
  name: "ชาลูกพีช",
  price: "60 บาท",
  description:
    "สดชื่นทุกสัมผัสกับชาลูกพีช หวานหอมจากลูกพีชแท้ เติมความสดใสให้ทุกวันของคุณ!",
},
{
  id: "8",
  category: ["ผลไม้"],
  image: "{{ asset('promote/img/ชาสตรอเบอร์รี่.jpg') }}",
  name: "ชาสตรอเบอร์รี่",
  price: "60 บาท",
  description:
    "สดชื่นทุกสัมผัสกับชาชาสตรอเบอร์รี่ หวานอมเปรี้ยวจากสตรอเบอร์รี่จากญี่ปุ่น เติมความสดใสให้ทุกวันของคุณ!",
},
{
  id: "9",
  category: ["ผลไม้"],
  image: "{{ asset('promote/img/ชาอัญชันน้ำผึ้งมะนาว.jpg') }}",
  name: "ชาอัญชันน้ำผึ้งมะนาว",
  price: "60 บาท",
  description:
    "ผ่อนคลายไปกับชาอัญชันน้ำผึ้งมะนาว หอมหวานจากน้ำผึ้งและสดชื่นจากมะนาว เติมเต็มวันของคุณด้วยความสดใสในทุกแก้ว",
},
{
  id: "10",
  category: ["มีความสุข"],
  image: "{{ asset('promote/img/นมสดโคฟูกุ.jpg') }}",
  name: "นมสดโคฟูกุ",
  price: "60 บาท",
  description:
    "นมสดโคฟูกุ ความสุขในทุกหยด จากฟาร์มที่ใส่ใจ ส่งตรงความสดชื่นถึงมือคุณ",
},
{
  id: "11",
  category: ["ลาเต้"],
  image: "{{ asset('promote/img/อัญชันลาเต้.jpg') }}",
  name: "อัญชันลาเต้",
  price: "60 บาท",
  description:
    "ปลุกความสดใสด้วยอัญชันลาเต้ สีสันสดใสจากธรรมชาติ รสชาติละมุนที่ลงตัวในทุกแก้ว",
},
];

const projectSection = document.getElementById("Projects");
products.forEach((product) => {
  const productHTML = `
    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
      <a href="detail.html" onclick="saveProductDetails('${product.id}')">
        <img src="${product.image}" alt="${product.name}" class="h-80 w-72 object-cover rounded-t-xl" />
        <div class="px-4 py-3 w-72">
          <span class="text-gray-400 mr-3 uppercase text-xs">${product.category}</span>
          <p class="text-lg font-bold text-black truncate block capitalize">${product.name}</p>
          <div class="flex items-center">
            <p class="text-lg font-semibold text-black cursor-auto my-3">${product.price}</p>
          </div>
        </div>
      </a>
    </div>
  `;
  projectSection.innerHTML += productHTML;
});

document.addEventListener("DOMContentLoaded", () => {
  const projectSection = document.getElementById("product");
  console.log(projectSection);
  if (projectSection) {
    products.forEach((product) => {
      const menutoindex = `
        <div class="product-img">
          <img src="${product.image}" alt="">
        </div>
        <div class="product-body">
          <p class="product-category">${product.category}</p>
          <h3 class="product-name"><a href="product.html">${product.name}</a></h3>
          <h4 class="product-price">${product.price}</h4>
          <div class="product-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
        </div>
      `;
      projectSection.innerHTML += menutoindex;
    });
  } else {
    console.error('Element with id "product" not found');
  }
});

// ฟังก์ชั่นสำหรับบันทึกข้อมูลสินค้าที่เลือก
function saveProductDetails(productId) {
  const selectedProduct = products.find((product) => product.id === productId);
  localStorage.setItem("selectedProduct", JSON.stringify(selectedProduct));
}
