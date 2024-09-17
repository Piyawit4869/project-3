const products = [
  {
    id: "1",
    category: ["ชา"],
    image: "img/ชาไทย.jpg",
    name: "ชาไทย",
    price: "60 บาท",
    description:
      "สัมผัสเสน่ห์แห่งรสชาติไทยแท้กับชาไทยหอมเข้ม ที่ผสานความหวานมันและความหอมกรุ่นของชาอย่างลงตัว ดื่มด่ำกับกลิ่นอายแบบดั้งเดิมที่มาพร้อมความสดชื่นในทุกคำ",
  },
  {
    id: "2",
    category: ["ลาเต้"],
    image: "img/กุหลาบลาเต้.jpg",
    name: "กุหลาบลาเต้",
    price: "60 บาท",
    description:
      "เครื่องดื่มที่มีการผสมผสานระหว่างรสชาติของนมกับความหอมหวานของดอกกุหลาบ",
  },
  {
    id: "3",
    category: ["ลาเต้"],
    image: "img/โกโก้ลาเต้.jpg",
    name: "โกโก้ลาเต้",
    price: "60 บาท",
    description:
      "สัมผัสความเข้มข้นที่หอมหวานไปกับโกโก้ที่ชวนหลงใหล ทุกอึกคือการเดินทางเข้าสู่โลกของช็อกโกแลตแท้ๆ ที่คัดสรรมาอย่างพิถีพิถัน ดื่มด่ำความอร่อยที่ทั้งนุ่มละมุนและอัดแน่นด้วยรสชาติเข้มข้น",
  },
  {
    id: "4",
    category: ["ชา"],
    image: "img/ชาเขียวมัทฉะชิอาวาเสะ.jpg",
    name: "ชาเขียวมัทฉะชิอาวาเสะ",
    price: "60 บาท",
    description:
      "เติมพลังความสดชื่นด้วยชาเขียวมัทฉะชิอาวาเสะ รสชาติเข้มข้นที่กลมกล่อมอย่างลงตัว มัทฉะแท้ที่คัดสรรจากใบชาเกรดพรีเมียม ผสมผสานด้วยสูตรลับเฉพาะ",
  },
  {
    id: "5",
    category: ["มีความสุข"],
    image: "img/ชานมมีความสุข.jpg",
    name: "ชานมมีความสุข",
    price: "60 บาท",
    description:
      "หลงใหลในความหวานหอมของชานมบราวชูการ์ ที่ทุกแก้วเต็มไปด้วยความอร่อยเข้มข้นของชานมนุ่มละมุน ผสานกับความหวานมันจากน้ำตาลทรายแดงคาราเมลเข้มข้นที่ลงตัวจนคุณต้องติดใจ",
  },
  {
    id: "6",
    category: ["ผลไม้"],
    image: "img/ชาผลไม้รวม.jpg",
    name: "ชาผลไม้รวม",
    price: "60 บาท",
    description:
      "ปลุกความสดใสให้วันของคุณด้วยชาผลไม้รวม ที่รวมความอร่อยจากผลไม้หลากหลายชนิดในแก้วเดียว หอมหวานอมเปรี้ยวอย่างลงตัว",
  },
  {
    id: "7",
    category: ["ผลไม้"],
    image: "img/ชาลูกพีช.jpg",
    name: "ชาลูกพีช",
    price: "60 บาท",
    description:
      "สดชื่นทุกสัมผัสกับชาลูกพีช หวานหอมจากลูกพีชแท้ เติมความสดใสให้ทุกวันของคุณ!",
  },
  {
    id: "8",
    category: ["ผลไม้"],
    image: "img/ชาสตรอเบอร์รี่.jpg",
    name: "ชาสตรอเบอร์รี่",
    price: "60 บาท",
    description:
      "สดชื่นทุกสัมผัสกับชาชาสตรอเบอร์รี่ หวานอมเปรี้ยวจากสตรอเบอร์รี่จากญี่ปุ่น เติมความสดใสให้ทุกวันของคุณ!",
  },
  {
    id: "9",
    category: ["ผลไม้"],
    image: "img/ชาอัญชันน้ำผึ้งมะนาว.jpg",
    name: "ชาอัญชันน้ำผึ้งมะนาว",
    price: "60 บาท",
    description:
      "ผ่อนคลายไปกับชาอัญชันน้ำผึ้งมะนาว หอมหวานจากน้ำผึ้งและสดชื่นจากมะนาว เติมเต็มวันของคุณด้วยความสดใสในทุกแก้ว",
  },
  {
    id: "10",
    category: ["มีความสุข"],
    image: "img/นมสดโคฟูกุ.jpg",
    name: "นมสดโคฟูกุ",
    price: "60 บาท",
    description:
      "นมสดโคฟูกุ ความสุขในทุกหยด จากฟาร์มที่ใส่ใจ ส่งตรงความสดชื่นถึงมือคุณ",
  },
  {
    id: "11",
    category: ["ลาเต้"],
    image: "img/อัญชันลาเต้.jpg",
    name: "อัญชันลาเต้",
    price: "60 บาท",
    description:
      "ปลุกความสดใสด้วยอัญชันลาเต้ สีสันสดใสจากธรรมชาติ รสชาติละมุนที่ลงตัวในทุกแก้ว",
  },
];

const productImgsContainer = document.getElementById("product-imgs");

// สร้าง HTML สำหรับรายการสินค้า
products.forEach(({ id, image, name }) => {
  const div = document.createElement("div");
  div.className = "product-preview";
  div.dataset.productId = id; // ใช้ data-* attribute เพื่อเก็บ ID
  div.innerHTML = `<img src="${image}" alt="${name}">`;
  productImgsContainer.appendChild(div);
});

// จัดการเหตุการณ์คลิก
productImgsContainer.addEventListener("click", (event) => {
  const productPreview = event.target.closest(".product-preview");
  if (productPreview) {
    const productId = productPreview.dataset.productId;
    showProductDetails(productId);
  }
});

function showProductDetails(productId) {
  console.log(`Show ${productId}`);

  const product = products.find((p) => p.id == productId);

  if (!product) {
    console.error(`Product ${productId} not found`);
    return;
  }

  const { name, description, price, image } = product;
  const elements = {
    "product-name": name,
    "product-description": description,
    "product-price": price,
    "product-image": image,
  };

  Object.entries(elements).forEach(([id, content]) => {
    console.log(`Setting ${id} to ${content}`);
    const element = document.getElementById(id);
    if (id === "product-image") {
      element.src = content;
    } else {
      element.innerText = content;
    }
  });
}
